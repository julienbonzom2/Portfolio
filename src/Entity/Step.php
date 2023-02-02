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
    private ?int $Month_begin = null;

    #[ORM\Column]
    private ?int $Year_begin = null;

    #[ORM\Column]
    private ?int $month_end = null;

    #[ORM\Column]
    private ?int $year_end = null;

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

    public function getMonth_Begin(): ?int
    {
        return $this->Month_begin;
    }

    public function setMonth_Begin(int $Month_begin): self
    {
        $this->Month_begin = $Month_begin;

        return $this;
    }

    public function getYear_Begin(): ?int
    {
        return $this->Year_begin;
    }

    public function setYear_Begin(int $Year_begin): self
    {
        $this->Year_begin = $Year_begin;

        return $this;
    }

    public function getMonth_End(): ?int
    {
        return $this->month_end;
    }

    public function setMonth_End(int $month_end): self
    {
        $this->month_end = $month_end;

        return $this;
    }

    public function getYear_End(): ?int
    {
        return $this->year_end;
    }

    public function setYear_End(int $year_end): self
    {
        $this->year_end = $year_end;

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
