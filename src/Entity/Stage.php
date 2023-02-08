<?php

namespace App\Entity;

use App\Repository\StageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StageRepository::class)]
class Stage
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
    private ?string $Company = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Descriptif = null;

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

    public function getCompany(): ?string
    {
        return $this->Company;
    }

    public function setCompany(string $Company): self
    {
        $this->Company = $Company;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->Descriptif;
    }

    public function setDescriptif(string $Descriptif): self
    {
        $this->Descriptif = $Descriptif;

        return $this;
    }
}
