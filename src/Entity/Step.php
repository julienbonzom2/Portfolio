<?php

namespace App\Entity;

use App\Repository\StepRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StepRepository::class)]
class Step
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $MonthBegin = null;

    #[ORM\Column]
    private ?int $YearBegin = null;

    #[ORM\Column]
    private ?int $MonthEnd = null;

    #[ORM\Column]
    private ?int $YearEnd = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $skills = null;

    #[ORM\ManyToOne(inversedBy: 'steps')]
    private ?EtapesPro $Etapespro = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonthBegin(): ?int
    {
        return $this->MonthBegin;
    }

    public function setMonthBegin(int $MonthBegin): self
    {
        $this->MonthBegin = $MonthBegin;

        return $this;
    }

    public function getYearBegin(): ?int
    {
        return $this->YearBegin;
    }

    public function setYearBegin(int $YearBegin): self
    {
        $this->YearBegin = $YearBegin;

        return $this;
    }

    public function getMonthEnd(): ?int
    {
        return $this->MonthEnd;
    }

    public function setMonthEnd(int $MonthEnd): self
    {
        $this->MonthEnd = $MonthEnd;

        return $this;
    }

    public function getYearEnd(): ?int
    {
        return $this->YearEnd;
    }

    public function setYearEnd(int $YearEnd): self
    {
        $this->YearEnd = $YearEnd;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getEtapespro(): ?EtapesPro
    {
        return $this->Etapespro;
    }

    public function setEtapespro(?EtapesPro $Etapespro): self
    {
        $this->Etapespro = $Etapespro;

        return $this;
    }
}
