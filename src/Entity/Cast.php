<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CastRepository")
 */
class Cast
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Movie", inversedBy="casts")
     */
    private $movie_id;

    public function __construct()
    {
        $this->movie_id = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Movie[]
     */
    public function getMovieId(): Collection
    {
        return $this->movie_id;
    }

    public function addMovieId(Movie $movieId): self
    {
        if (!$this->movie_id->contains($movieId)) {
            $this->movie_id[] = $movieId;
        }

        return $this;
    }

    public function removeMovieId(Movie $movieId): self
    {
        if ($this->movie_id->contains($movieId)) {
            $this->movie_id->removeElement($movieId);
        }

        return $this;
    }
}
