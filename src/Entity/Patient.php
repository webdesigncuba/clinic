<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $first_name;

    #[ORM\Column(type: 'string', length: 100)]
    private $last_name;

    #[ORM\ManyToOne(targetEntity: BloodType::class, inversedBy: 'etnic')]
    private $blood_type;

    #[ORM\ManyToOne(targetEntity: Etnic::class, inversedBy: 'patients')]
    private $etnic;

    #[ORM\ManyToOne(targetEntity: Ocup::class, inversedBy: 'patients')]
    private $ocupation;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $phone_number;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $mobil_number;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $address;

    #[ORM\ManyToOne(targetEntity: State::class, inversedBy: 'patients')]
    private $state;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getBloodType(): ?BloodType
    {
        return $this->blood_type;
    }

    public function setBloodType(?BloodType $blood_type): self
    {
        $this->blood_type = $blood_type;

        return $this;
    }

    public function getEtnic(): ?Etnic
    {
        return $this->etnic;
    }

    public function setEtnic(?Etnic $etnic): self
    {
        $this->etnic = $etnic;

        return $this;
    }

    public function getOcupation(): ?Ocup
    {
        return $this->ocupation;
    }

    public function setOcupation(?Ocup $ocupation): self
    {
        $this->ocupation = $ocupation;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(?string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getMobilNumber(): ?string
    {
        return $this->mobil_number;
    }

    public function setMobilNumber(?string $mobil_number): self
    {
        $this->mobil_number = $mobil_number;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getState(): ?State
    {
        return $this->state;
    }

    public function setState(?State $state): self
    {
        $this->state = $state;

        return $this;
    }
}
