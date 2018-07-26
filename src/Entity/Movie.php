<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieRepository")
 */
class Movie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $movie_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $headline;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rating;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $lastUpdated;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duration;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $synopsis;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $body;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $quote;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $class;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $cert;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sum;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Cast", mappedBy="movie_id")
     */
    private $casts;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Image", mappedBy="movie", orphanRemoval=true)
     */
    private $images;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Genre", mappedBy="movie")
     */
    private $genres;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reviewer", inversedBy="movies")
     */
    private $reviewAuthor;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $skyGoId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $skyGoUrl;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ViewingWindow")
     */
    private $viewingWindow;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Director", mappedBy="movie")
     */
    private $directors;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $friendlyUrl;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Video", mappedBy="movie")
     */
    private $videos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Gallery", mappedBy="movie")
     */
    private $galleries;


    public function __construct()
    {
        $this->casts = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->genres = new ArrayCollection();
        $this->directors = new ArrayCollection();
        $this->videos = new ArrayCollection();
        $this->galleries = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMovieId(): ?string
    {
        return $this->movie_id;
    }

    public function setMovieId(string $movie_id): self
    {
        $this->movie_id = $movie_id;

        return $this;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setHeadline(?string $headline): self
    {
        $this->headline = $headline;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getLastUpdated(): ?\DateTimeInterface
    {
        return $this->lastUpdated;
    }

    public function setLastUpdated(?\DateTimeInterface $lastUpdated): self
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(?string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getQuote(): ?string
    {
        return $this->quote;
    }

    public function setQuote(?string $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(?string $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getCert(): ?string
    {
        return $this->cert;
    }

    public function setCert(?string $cert): self
    {
        $this->cert = $cert;

        return $this;
    }

    public function getSum(): ?string
    {
        return $this->sum;
    }

    public function setSum(?string $sum): self
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * @return Collection|Cast[]
     */
    public function getCasts(): Collection
    {
        return $this->casts;
    }

    public function addCast(Cast $cast): self
    {
        if (!$this->casts->contains($cast)) {
            $this->casts[] = $cast;
            $cast->addMovieId($this);
        }

        return $this;
    }

    public function removeCast(Cast $cast): self
    {
        if ($this->casts->contains($cast)) {
            $this->casts->removeElement($cast);
            $cast->removeMovieId($this);
        }

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setMovie($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->contains($image)) {
            $this->images->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getMovie() === $this) {
                $image->setMovie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Genre[]
     */
    public function getGenres(): Collection
    {
        return $this->genres;
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->genres->contains($genre)) {
            $this->genres[] = $genre;
            $genre->addMovie($this);
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        if ($this->genres->contains($genre)) {
            $this->genres->removeElement($genre);
            $genre->removeMovie($this);
        }

        return $this;
    }

    public function getReviewAuthor(): ?Reviewer
    {
        return $this->reviewAuthor;
    }

    public function setReviewAuthor(?Reviewer $reviewAuthor): self
    {
        $this->reviewAuthor = $reviewAuthor;

        return $this;
    }

    public function getSkyGoId(): ?string
    {
        return $this->skyGoId;
    }

    public function setSkyGoId(?string $skyGoId): self
    {
        $this->skyGoId = $skyGoId;

        return $this;
    }

    public function getSkyGoUrl(): ?string
    {
        return $this->skyGoUrl;
    }

    public function setSkyGoUrl(?string $skyGoUrl): self
    {
        $this->skyGoUrl = $skyGoUrl;

        return $this;
    }

    public function getViewingWindow(): ?ViewingWindow
    {
        return $this->viewingWindow;
    }

    public function setViewingWindow(?ViewingWindow $viewingWindow): self
    {
        $this->viewingWindow = $viewingWindow;

        return $this;
    }

    /**
     * @return Collection|Director[]
     */
    public function getDirectors(): Collection
    {
        return $this->directors;
    }

    public function addDirector(Director $director): self
    {
        if (!$this->directors->contains($director)) {
            $this->directors[] = $director;
            $director->addMovie($this);
        }

        return $this;
    }

    public function removeDirector(Director $director): self
    {
        if ($this->directors->contains($director)) {
            $this->directors->removeElement($director);
            $director->removeMovie($this);
        }

        return $this;
    }

    public function getFriendlyUrl(): ?string
    {
        return $this->friendlyUrl;
    }

    public function setFriendlyUrl(?string $friendlyUrl): self
    {
        $this->friendlyUrl = $friendlyUrl;

        return $this;
    }

    /**
     * @return Collection|Video[]
     */
    public function getVideos(): Collection
    {
        return $this->videos;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos[] = $video;
            $video->setMovie($this);
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        if ($this->videos->contains($video)) {
            $this->videos->removeElement($video);
            // set the owning side to null (unless already changed)
            if ($video->getMovie() === $this) {
                $video->setMovie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Gallery[]
     */
    public function getGalleries(): Collection
    {
        return $this->galleries;
    }

    public function addGallery(Gallery $gallery): self
    {
        if (!$this->galleries->contains($gallery)) {
            $this->galleries[] = $gallery;
            $gallery->setMovie($this);
        }

        return $this;
    }

    public function removeGallery(Gallery $gallery): self
    {
        if ($this->galleries->contains($gallery)) {
            $this->galleries->removeElement($gallery);
            // set the owning side to null (unless already changed)
            if ($gallery->getMovie() === $this) {
                $gallery->setMovie(null);
            }
        }

        return $this;
    }
}
