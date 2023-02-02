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
    private ?int $Month_begin = null;

    #[ORM\Column]
    private ?int $Year_begin = null;

    #[ORM\Column]
    private ?int $Month_end = null;

    #[ORM\Column]
    private ?int $Year_end = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Company = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Descriptif = null;

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
        return $this->Month_end;
    }

    public function setMonth_End(int $Month_end): self
    {
        $this->Month_end = $Month_end;

        return $this;
    }

    public function getYear_End(): ?int
    {
        return $this->Year_end;
    }

    public function setYear_End(int $Year_end): self
    {
        $this->Year_end = $Year_end;

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
