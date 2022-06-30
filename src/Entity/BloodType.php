<?php

namespace App\Entity;

use App\Repository\BloodTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BloodTypeRepository::class)]
class BloodType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $type;

    #[ORM\OneToMany(mappedBy: 'blood_type', targetEntity: Patient::class)]
    private $etnic;

    public function __construct()
    {
        $this->etnic = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Patient>
     */
    public function getEtnic(): Collection
    {
        return $this->etnic;
    }

    public function addEtnic(Patient $etnic): self
    {
        if (!$this->etnic->contains($etnic)) {
            $this->etnic[] = $etnic;
            $etnic->setBloodType($this);
        }

        return $this;
    }

    public function removeEtnic(Patient $etnic): self
    {
        if ($this->etnic->removeElement($etnic)) {
            // set the owning side to null (unless already changed)
            if ($etnic->getBloodType() === $this) {
                $etnic->setBloodType(null);
            }
        }

        return $this;
    }
}
