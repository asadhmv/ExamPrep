<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'quizzes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Student $student = null;

    #[ORM\ManyToOne(inversedBy: 'quizzes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Subject $subject = null;

    #[ORM\ManyToOne(inversedBy: 'quizzes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ressources $ressources = null;

    #[ORM\OneToMany(mappedBy: 'quiz', targetEntity: Quizmark::class)]
    private Collection $quizmarks;

    public function __construct()
    {
        $this->quizmarks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSubject(): ?subject
    {
        return $this->subject;
    }

    public function setSubject(?subject $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getRessources(): ?ressources
    {
        return $this->ressources;
    }

    public function setRessources(?ressources $ressources): static
    {
        $this->ressources = $ressources;

        return $this;
    }

    /**
     * @return Collection<int, Quizmark>
     */
    public function getQuizmarks(): Collection
    {
        return $this->quizmarks;
    }

    public function addQuizmark(Quizmark $quizmark): static
    {
        if (!$this->quizmarks->contains($quizmark)) {
            $this->quizmarks->add($quizmark);
            $quizmark->setQuiz($this);
        }

        return $this;
    }

    public function removeQuizmark(Quizmark $quizmark): static
    {
        if ($this->quizmarks->removeElement($quizmark)) {
            // set the owning side to null (unless already changed)
            if ($quizmark->getQuiz() === $this) {
                $quizmark->setQuiz(null);
            }
        }

        return $this;
    }
}
