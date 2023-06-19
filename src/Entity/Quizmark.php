<?php

namespace App\Entity;

use App\Repository\QuizmarkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizmarkRepository::class)]
class Quizmark
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $mark = null;

    #[ORM\ManyToOne(inversedBy: 'quizmarks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Student $student = null;

    #[ORM\ManyToOne(inversedBy: 'quizmarks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Quiz $quiz = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMark(): ?float
    {
        return $this->mark;
    }

    public function setMark(float $mark): static
    {
        $this->mark = $mark;

        return $this;
    }

    public function getStudent(): ?student
    {
        return $this->student;
    }

    public function setStudent(?student $student): static
    {
        $this->student = $student;

        return $this;
    }

    public function getQuiz(): ?quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?quiz $quiz): static
    {
        $this->quiz = $quiz;

        return $this;
    }
}
