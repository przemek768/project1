<?php

namespace App\Entity;

use App\Repository\GroupRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupRepository::class)]
#[ORM\Table(name: 'group')]
class Group
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $number = null;

    #[ORM\Column]
    private ?int $max_size = null;

    #[ORM\Column]
    private ?int $study_year = null;

    #[ORM\Column]
    private ?int $grade = null;

    #[ORM\Column(length: 255)]
    private ?string $field_of_study = null;

    #[ORM\Column(length: 255)]
    private ?string $faculty_of_studies = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getMaxSize(): ?int
    {
        return $this->max_size;
    }

    public function setMaxSize(int $max_size): self
    {
        $this->max_size = $max_size;

        return $this;
    }

    public function getStudyYear(): ?int
    {
        return $this->study_year;
    }

    public function setStudyYear(int $study_year): self
    {
        $this->study_year = $study_year;

        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getFieldOfStudy(): ?string
    {
        return $this->field_of_study;
    }

    public function setFieldOfStudy(string $field_of_study): self
    {
        $this->field_of_study = $field_of_study;

        return $this;
    }

    public function getFacultyOfStudies(): ?string
    {
        return $this->faculty_of_studies;
    }

    public function setFacultyOfStudies(string $faculty_of_studies): self
    {
        $this->faculty_of_studies = $faculty_of_studies;

        return $this;
    }
}
