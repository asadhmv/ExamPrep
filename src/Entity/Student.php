<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $username = null;

    #[ORM\OneToMany(mappedBy: 'student', targetEntity: Ressources::class)]
    private Collection $ressources;

    #[ORM\OneToMany(mappedBy: 'student', targetEntity: Quiz::class)]
    private Collection $quizzes;

    #[ORM\OneToMany(mappedBy: 'student', targetEntity: Quizmark::class)]
    private Collection $quizmarks;

    #[ORM\Column(nullable: true)]
    private ?int $user_id = null;

    #[ORM\OneToOne(inversedBy: 'student', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function __construct()
    {
        $this->ressources = new ArrayCollection();
        $this->quizzes = new ArrayCollection();
        $this->quizmarks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return Collection<int, Ressources>
     */
    public function getRessources(): Collection
    {
        return $this->ressources;
    }

    public function addRessource(Ressources $ressource): static
    {
        if (!$this->ressources->contains($ressource)) {
            $this->ressources->add($ressource);
            $ressource->setStudent($this);
        }

        return $this;
    }

    public function removeRessource(Ressources $ressource): static
    {
        if ($this->ressources->removeElement($ressource)) {
            // set the owning side to null (unless already changed)
            if ($ressource->getStudent() === $this) {
                $ressource->setStudent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Quiz>
     */
    public function getQuizzes(): Collection
    {
        return $this->quizzes;
    }

    public function addQuiz(Quiz $quiz): static
    {
        if (!$this->quizzes->contains($quiz)) {
            $this->quizzes->add($quiz);
            $quiz->setStudent($this);
        }

        return $this;
    }

    public function removeQuiz(Quiz $quiz): static
    {
        if ($this->quizzes->removeElement($quiz)) {
            // set the owning side to null (unless already changed)
            if ($quiz->getStudent() === $this) {
                $quiz->setStudent(null);
            }
        }

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
            $quizmark->setStudent($this);
        }

        return $this;
    }

    public function removeQuizmark(Quizmark $quizmark): static
    {
        if ($this->quizmarks->removeElement($quizmark)) {
            // set the owning side to null (unless already changed)
            if ($quizmark->getStudent() === $this) {
                $quizmark->setStudent(null);
            }
        }

        return $this;
    }

    /*public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(user $user): static
    {
        $this->user = $user;

        return $this;
    }*/

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(?int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }
}
