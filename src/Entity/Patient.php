<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 191)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $middleName = null;

    #[ORM\Column(length: 255)]
    private ?string $lastName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dob = null;

    #[ORM\Column(length: 255)]
    private ?string $gender = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cellPhone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $responsibleParty = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $primaryDentist = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $feeSchedule = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preferredClinic = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $createdBy = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $updatedBy = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): static
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getDob(): ?\DateTime
    {
        return $this->dob;
    }

    public function setDob(\DateTime $dob): static
    {
        $this->dob = $dob;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getCellPhone(): ?string
    {
        return $this->cellPhone;
    }

    public function setCellPhone(?string $cellPhone): static
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    public function getResponsibleParty(): ?string
    {
        return $this->responsibleParty;
    }

    public function setResponsibleParty(?string $responsibleParty): static
    {
        $this->responsibleParty = $responsibleParty;

        return $this;
    }

    public function getPrimaryDentist(): ?string
    {
        return $this->primaryDentist;
    }

    public function setPrimaryDentist(?string $primaryDentist): static
    {
        $this->primaryDentist = $primaryDentist;

        return $this;
    }

    public function getFeeSchedule(): ?string
    {
        return $this->feeSchedule;
    }

    public function setFeeSchedule(?string $feeSchedule): static
    {
        $this->feeSchedule = $feeSchedule;

        return $this;
    }

    public function getPreferredClinic(): ?string
    {
        return $this->preferredClinic;
    }

    public function setPreferredClinic(?string $preferredClinic): static
    {
        $this->preferredClinic = $preferredClinic;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): static
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?string $updatedBy): static
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }
}
