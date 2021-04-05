<?php

namespace App\Entity;

use App\Repository\MechanicsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MechanicsRepository::class)
 */
class Mechanics
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $organization_id;

    /**
     * @ORM\Column(type="date")
     */
    private $load_ref_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $file;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrganizationId(): ?int
    {
        return $this->organization_id;
    }

    public function setOrganizationId(int $organization_id): self
    {
        $this->organization_id = $organization_id;

        return $this;
    }

    public function getLoadRefDate(): ?\DateTimeInterface
    {
        return $this->load_ref_date;
    }

    public function setLoadRefDate(\DateTimeInterface $load_ref_date): self
    {
        $this->load_ref_date = $load_ref_date;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }
}
