<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Entity\Director;
use App\Entity\Genre;
use App\Entity\Cast;
use App\Entity\Reviewer;
use App\Entity\Image;
use App\Entity\Video;
use App\Entity\Gallery;
use App\Entity\ViewingWindow;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DatabaseController extends AbstractController
{
    /**
     * @Route("/database", name="database")
     */
    public function index()
    {
		// Redirect this URL to the main action
        return $this->redirectToRoute('fetch_database');
	}
	
	/**
     * @Route("/database/empty", name="empty_database")
     */
    public function empty_database()
    {
		// Get the database connection in order to perform raw SQL query
		$connection = $this->getDoctrine()->getManager()->getConnection();
		
		// Get the Schema Manager in order to get the table names
		$schemaManager = $connection->getSchemaManager();
		$tables = $schemaManager->listTables();

		// Set foreign key check to 0 in order to delete all the tables and set it back to 1
		// Prepare TRUNCATE query for each table
		$queries = 'SET FOREIGN_KEY_CHECKS = 0;';
		foreach($tables as $table) {
			$name = $table->getName();
			if($name == "migration_versions") continue;
			$queries .= 'TRUNCATE ' . $name . ';';
		}
		$queries .= 'SET FOREIGN_KEY_CHECKS = 1;';

		// Execute the query
		$connection->executeQuery($queries, array(), array());

        return $this->render('database/empty_database.html.twig');
	}
	
	/**
     * @Route("/database/fetch", name="fetch_database")
     */
    public function fetch_database()
    {
		// Request the JSON using CURL
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://mgtechtest.blob.core.windows.net/files/showcase.json');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);

		// Get the Entity Manager
		$em = $this->getDoctrine()->getManager();

		// Encode the response with UTF8 in order to decode it correctly
		$response = utf8_encode($response);

		// Decode the JSON into objects
		$entries = json_decode($response);

		// Get the Repositories so they would be easier to access
		$movieRepo = $this->getDoctrine()->getRepository(Movie::class);
		$directorRepo = $this->getDoctrine()->getRepository(Director::class);
		$genreRepo = $this->getDoctrine()->getRepository(Genre::class);
		$castRepo = $this->getDoctrine()->getRepository(Cast::class);
		$reviewerRepo = $this->getDoctrine()->getRepository(Reviewer::class);

		// Count retrieved movies
		$movies_count = 0;

		// Parse each object from entries into a Movie entity
		foreach($entries as $entry) {
			// If the entry already exists, skip it
			if($movieRepo->findOneBy(['headline' => $entry->headline]))
				continue;

			// Set main fields in the entity
			$movie = new Movie();
			if(isset($entry->headline)) $movie->setHeadline($entry->headline);
			if(isset($entry->synopsis)) $movie->setSynopsis($entry->synopsis);
			if(isset($entry->quote)) $movie->setQuote($entry->quote);
			if(isset($entry->body)) $movie->setBody($entry->body);
			if(isset($entry->id)) $movie->setMovieId($entry->id);
			if(isset($entry->url)) $movie->setUrl($entry->url);
			if(isset($entry->class)) $movie->setClass($entry->class);
			if(isset($entry->cert)) $movie->setCert($entry->cert);
			if(isset($entry->duration)) $movie->setDuration($entry->duration);
			if(isset($entry->rating)) $movie->setRating($entry->rating);
			if(isset($entry->year)) $movie->setYear($entry->year);
			if(isset($entry->skyGoId)) $movie->setSkyGoId($entry->skyGoId);
			if(isset($entry->skyGoUrl)) $movie->setSkyGoUrl($entry->skyGoUrl);
			if(isset($entry->sum)) $movie->setSum($entry->sum);
			if(isset($entry->lastUpdated)) $movie->setLastUpdated(\DateTime::createFromFormat('Y-m-d', $entry->lastUpdated));

			// Transform the headline into a URL friendly format
			if(isset($entry->headline))  {
				$string = $entry->headline;
				$string = str_replace(" ","-", $string); // transform space in dash
				$string = str_replace(":","", $string); // remove columns
				$string = strtolower($string); // transform the text to lowercase
				$movie->setFriendlyUrl($string);
			}

			// If there is a review author set, add it to its entity and update movie
			if(isset($entry->reviewAuthor)) {
				$reviewAuthor = $reviewerRepo->findOneBy(['name' => $entry->reviewAuthor]);
				if(!$reviewAuthor) {
					$reviewAuthor = new Reviewer();
					$reviewAuthor->setName($entry->reviewAuthor);
					$em->persist($reviewAuthor);
				}
				$movie->setReviewAuthor($reviewAuthor);
			}
			
			// If there is a viewing window set, add it to its entity and update movie
			if(isset($entry->viewingWindow)) {
				$viewingWindow = new ViewingWindow();
				if(isset($entry->viewingWindow->title)) $viewingWindow->setTitle($entry->viewingWindow->title);
				if(isset($entry->viewingWindow->wayToWatch)) $viewingWindow->setWayToWatch($entry->viewingWindow->wayToWatch);
				if(isset($entry->viewingWindow->startDate)) $viewingWindow->setStartDate(\DateTime::createFromFormat('Y-m-d', $entry->viewingWindow->startDate));
				if(isset($entry->viewingWindow->endDate)) $viewingWindow->setEndDate(\DateTime::createFromFormat('Y-m-d', $entry->viewingWindow->endDate));
				$em->persist($viewingWindow);
				$movie->setViewingWindow($viewingWindow);
			}

			// If there are directors set, add them to their entity and update movie
			if(isset($entry->directors)) {
				foreach($entry->directors as $item) {
					$director = $directorRepo->findOneBy(['name' => $item->name]);
					if(!$director) {
						$director = new Director();
						$director->setName($item->name);
						
						$em->persist($director);
					}
					$movie->addDirector($director);
				}
			}
			
			// If there is a cast set, add them to their entity and update movie
			if(isset($entry->cast)) {
				foreach($entry->cast as $item) {
					$castMember = $castRepo->findOneBy(['name' => $item->name]);
					if(!$castMember) {
						$castMember = new Cast();
						$castMember->setName($item->name);
	
						$em->persist($castMember);
					}
					$movie->addCast($castMember);
				}
			}
			
			// If there are genres set, add them to their entity and update movie
			if(isset($entry->genres)) {
				foreach($entry->genres as $item) {
					$genre = $genreRepo->findOneBy(['name' => $item]);
					if(!$genre) {
						$genre = new Genre();
						$genre->setName($item);
	
						$em->persist($genre);
					}
					$movie->addGenre($genre);
				}
			}
			
			// If there are card images set, add them to their entity and update movie
			if(isset($entry->cardImages)) {
				foreach($entry->cardImages as $item) {
					$img = new Image();
					if(isset($item->url)) $img->setUrl($item->url);
					if(isset($item->h)) $img->setHeight($item->h);
					if(isset($item->w)) $img->setWidth($item->w);
					$img->setType('card-image');
					$img->setLocalPath(null);

					$em->persist($img);
					$movie->addImage($img);
				}
			}
			
			// If there are key art images set, add them to their entity and update movie
			if(isset($entry->keyArtImages)) {
				foreach($entry->keyArtImages as $item) {
					$img = new Image();
					if(isset($item->url)) $img->setUrl($item->url);
					if(isset($item->h)) $img->setHeight($item->h);
					if(isset($item->w)) $img->setWidth($item->w);
					$img->setType('keyart-image');
	
					$em->persist($img);
					$movie->addImage($img);
				}
			}
			
			// If there are videos set, add them and their alternatives to their entity and update movie
			if(isset($entry->videos)) {
				foreach($entry->videos as $item) {
					$video = new Video();
					$video->setTitle($item->title);
					$video->setType($item->type);
					$video->setUrl($item->url);
					$video->setQuality('Default');
					$video->setMovie($movie);
					$em->persist($video);
					
					if(isset($item->alternatives)) {
						foreach($item->alternatives as $alt) {
							$alternative = new Video();
							$alternative->setTitle($item->title);
							$alternative->setType($item->type);
							$alternative->setUrl($alt->url);
							$alternative->setQuality($alt->quality);
							$alternative->setMovie($movie);
							$em->persist($alternative);
						}
					}
				}
			}

			// If there are galleries set, add them to their entity and update movie
			if(isset($entry->galleries)) {
				foreach($entry->galleries as $item) {
					$gallery = new Gallery();
					if(isset($item->title)) $gallery->setTitle($item->title);
					if(isset($item->url)) $gallery->setUrl($item->url);
					if(isset($item->thumbnailUrl)) $gallery->setThumbnailUrl($item->thumbnailUrl);
					if(isset($item->id)) $gallery->setGalleryId($item->id);

					$em->persist($gallery);
					$movie->addGallery($gallery);
				}
			}

			// Update the database
			$em->persist($movie);
			$em->flush();
			$movies_count++;
		}

        return $this->render('database/fetch_database.html.twig', [
            'count' => $movies_count,
        ]);
    }
}
