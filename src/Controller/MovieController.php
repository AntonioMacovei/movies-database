<?php

namespace App\Controller;

use App\Entity\Movie;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\Tools\Pagination\Paginator;

class MovieController extends AbstractController
{
	/**
     * @Route("/movies", name="movies")
     */
	public function movies()
	{
		// Redirect this URL to the paginated one
		return $this->redirectToRoute('movies_paginated', array('page' => 1));
	}

	/**
     * @Route("/movies/show/{slug}", name="show")
     */
	public function show($slug = null)
	{
		// Render template in case of not found error
		$errorRenderer = $this->render('movie/movie_show.html.twig', ['movie' => null]);
		
		// If there is no slug provided, return not found error
		if(!$slug) {
			$this->addFlash('danger', 'Movie not found!');
			return $errorRenderer;
		}

		// Get Movie Repository and search in the database
		$repository = $this->getDoctrine()->getRepository(Movie::class);
		$movie = $repository->findOneBy(['friendlyUrl' => $slug]);

		// If there is no result, return not found error
		if(!$movie) {
			$this->addFlash('danger', 'Movie not found!');
			return $errorRenderer;
		}
		
		// Cache images if it's first time to display them
		$images = $movie->getImages();
		$i = 0;
		foreach($images as $img) {
			// If local path is not set, it means it wasn't rendered yet and we need to cache it
			if(!$img->getLocalPath()) {
				$ext = pathinfo($img->getUrl(), PATHINFO_EXTENSION);
				if($img->getType() == 'card-image')
					$localPath = 'img/card-images/' . $movie->getMovieId() . "_" . $i . "." . $ext;
				if($img->getType() == 'keyart-image')
					$localPath = 'img/keyart-images/' . $movie->getMovieId() . "_" . $i . "." . $ext;
				
				// Check if the URL requested is available
				$HTTPHeaders = get_headers($img->getUrl());
				if(substr($HTTPHeaders[0], 9, 3) == '200') {
					// Set local path and copy the image locally
					$img->setLocalPath($localPath);
					file_put_contents($localPath, file_get_contents($img->getUrl()));
					$i++;
				}
			}
		}

		// Cache videos if it's first time to display them
		$videos = $movie->getVideos();
		$i = 0;
		foreach($videos as $video) {
			// If local path is not set, it means it wasn't rendered yet and we need to cache it
			if(!$video->getLocalPath()) {
				$ext = pathinfo($img->getUrl(), PATHINFO_EXTENSION);
				$localPath = 'video/' . $movie->getMovieId() . "_" . $i . "." . $ext;
				
				// Check if the URL requested is available
				$HTTPHeaders = get_headers($video->getUrl());
				if(substr($HTTPHeaders[0], 9, 3) == '200') {
					// Set local path and copy the image locally
					$video->setLocalPath($localPath);
					file_put_contents($localPath, file_get_contents($video->getUrl()));
					$i++;
				}
			}
		}
		// Update the database
		$this->getDoctrine()->getManager()->flush();
		
		return $this->render('movie/movie_show.html.twig', [
			'movie' => $movie,
        ]);
	}
	
	/**
     * @Route("/movies/page/{page<\d+>}", name="movies_paginated")
     */
    public function movies_paginated($page = 1)
    {
		if (!is_numeric($page) || $page < 1) $page = 1;
		$perpage = 5;

		// Query for the paginated results
		$qb = $this->getDoctrine()->getManager()->createQueryBuilder();
		$qb->select('m')
			->from('App\Entity\Movie', 'm')
			->orderBy('m.year', "DESC")
			->setFirstResult(($page - 1) * $perpage)
			->setMaxResults($perpage);
		$movies = $qb->getQuery()->getResult();

		// Count all results
		$qb = $this->getDoctrine()->getManager()->createQueryBuilder()
            ->select("COUNT(m.id)")
            ->from('App\Entity\Movie', "m");
		$count = $qb->getQuery()->getSingleScalarResult();

		// Set variables needed for pagination
		$totalPages = floor((($count - 1) / $perpage) + 1);
		$link = '/movies/page/';

        return $this->render('movie/movie_list.html.twig', [
			'movies' => $movies,
			'total' => $totalPages,
			'perpage' => $perpage,
			'page' => $page,
			'link' => $link,
        ]);
	}

	/**
     * @Route("/movies/search/{slug}/page/{page<\d+>}", name="movies_search_paginated")
     */
    public function movies_search_paginated($slug = null, $page = 1)
    {
		if (!is_numeric($page) || $page < 1) $page = 1;
		$perpage = 5;
		$search = "%".$slug."%";

		// Query for the paginated results
		$qb = $this->getDoctrine()->getManager()->createQueryBuilder();
		$qb->select('m')
			->from('App\Entity\Movie', 'm')
			->where('m.headline LIKE :search')
			->orderBy('m.year', "DESC")
			->setParameter("search", $search)
			->setFirstResult(($page - 1) * $perpage)
			->setMaxResults($perpage);
		$movies = $qb->getQuery()->getResult();

		// Count all results
		$qb = $this->getDoctrine()->getManager()->createQueryBuilder()
			->select("COUNT(m.id)")
			->where('m.headline LIKE :search')
			->from('App\Entity\Movie', "m")
			->setParameter("search", $search);
		$count = $qb->getQuery()->getSingleScalarResult();

		// Set variables needed for pagination
		$totalPages = floor((($count - 1) / $perpage) + 1);
		$link = '/movies/search/' . $slug . '/page/';

        return $this->render('movie/movie_list.html.twig', [
			'movies' => $movies,
			'total' => $totalPages,
			'perpage' => $perpage,
			'page' => $page,
			'link' => $link,
        ]);
	}

	/**
     * @Route("/movies/search/{slug}", name="movies_search_partial")
     */
    public function movies_search_partial($slug = null)
    {
		// Redirect this URL to the paginated one
		return $this->redirectToRoute('movies_search_paginated', array('slug' => $slug, 'page' => 1));
	}
}
