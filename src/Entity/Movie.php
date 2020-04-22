<?php

namespace App\Entity;

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
     * @ORM\Column(type="string", length=9, unique=true)
     */
    private $imdb;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $year;

    /**
     * @var int
     */
    private $rate;

    /**
     * @var string
     */
    private $poster;

    /**
     * @var string
     */
    private $runtime;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $director;

    /**
     * @var string
     */
    private $actors;

    /**
     * @var string
     */
    private $plot;

    /**
     * @var string
     */
    private $country;

    /**
     * Movie constructor.
     */
    public function __construct()
    {
        $this->id = 0;
        $this->title = "";
        $this->year = 0;
        $this->rate = 0;
        $this->poster = "";
        $this->imdb = "";
        $this->runtime = "";
        $this->genre = "";
        $this->director = "";
        $this->actors = "";
        $this->plot = "";
        $this->country = "";
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @return int
     */
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     */
    public function setRate(int $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return string
     */
    public function getPoster(): string
    {
        return $this->poster;
    }

    /**
     * @param string $poster
     */
    public function setPoster(string $poster): void
    {
        $this->poster = $poster;
    }

    /**
     * @return string
     */
    public function getRuntime(): string
    {
        return $this->runtime;
    }

    /**
     * @param string $runtime
     */
    public function setRuntime(string $runtime): void
    {
        $this->runtime = $runtime;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @return string
     */
    public function getDirector(): string
    {
        return $this->director;
    }

    /**
     * @param string $director
     */
    public function setDirector(string $director): void
    {
        $this->director = $director;
    }

    /**
     * @return string
     */
    public function getActors(): string
    {
        return $this->actors;
    }

    /**
     * @param string $actors
     */
    public function setActors(string $actors): void
    {
        $this->actors = $actors;
    }

    /**
     * @return string
     */
    public function getPlot(): string
    {
        return $this->plot;
    }

    /**
     * @param string $plot
     */
    public function setPlot(string $plot): void
    {
        $this->plot = $plot;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImdb(): ?string
    {
        return $this->imdb;
    }

    public function setImdb(string $imdb): self
    {
        $this->imdb = $imdb;

        return $this;
    }

}
