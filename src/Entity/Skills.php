<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillsRepository::class)]
class Skills
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Languages = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $AIRBUS = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $DASSAULT = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $CALCUL_DESIGN = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $OFFICE = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Langues = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLanguages(): ?string
    {
        return $this->Languages;
    }

    public function setLanguages(string $Languages): self
    {
        $this->Languages = $Languages;

        return $this;
    }

    public function getAIRBUS(): ?string
    {
        return $this->AIRBUS;
    }

    public function setAIRBUS(string $AIRBUS): self
    {
        $this->AIRBUS = $AIRBUS;

        return $this;
    }

    public function getDASSAULT(): ?string
    {
        return $this->DASSAULT;
    }

    public function setDASSAULT(string $DASSAULT): self
    {
        $this->DASSAULT = $DASSAULT;

        return $this;
    }

    public function getCALCULDESIGN(): ?string
    {
        return $this->CALCUL_DESIGN;
    }

    public function setCALCULDESIGN(string $CALCUL_DESIGN): self
    {
        $this->CALCUL_DESIGN = $CALCUL_DESIGN;

        return $this;
    }

    public function getOFFICE(): ?string
    {
        return $this->OFFICE;
    }

    public function setOFFICE(string $OFFICE): self
    {
        $this->OFFICE = $OFFICE;

        return $this;
    }

    public function getLangues(): ?string
    {
        return $this->Langues;
    }

    public function setLangues(string $Langues): self
    {
        $this->Langues = $Langues;

        return $this;
    }
}
