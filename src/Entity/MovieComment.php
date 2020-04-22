<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieCommentRepository")
 */
class MovieComment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Movie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Movie;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Comment", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Comment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovie(): ?Movie
    {
        return $this->Movie;
    }

    public function setMovie(?Movie $Movie): self
    {
        $this->Movie = $Movie;

        return $this;
    }

    public function getComment(): ?Comment
    {
        return $this->Comment;
    }

    public function setComment(Comment $Comment): self
    {
        $this->Comment = $Comment;

        return $this;
    }

}
