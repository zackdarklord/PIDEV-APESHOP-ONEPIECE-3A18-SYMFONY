<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forums
 *
 * @ORM\Table(name="forums")
 * @ORM\Entity(repositoryClass="App\Repository\ForumsRepository")
 */
class Forums
{
    /**
     * @var int
     *
     * @ORM\Column(name="idForum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idforum;

    /**
     * @var string
     *
     * @ORM\Column(name="sujetForum", type="string", length=30, nullable=false)
     */
    private $sujetforum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date", nullable=false)
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;

    public function getIdforum(): ?int
    {
        return $this->idforum;
    }




    public function getSujetforum(): ?string
    {
        return $this->sujetforum;
    }

    public function setSujetforum(string $sujetforum): self
    {
        $this->sujetforum = $sujetforum;

        return $this;
    }

    public function __toString()
    {

        return (string) $this->getSujetforum();

    }

    public function getDateajout(): ?\DateTimeInterface
    {
        return $this->dateajout;
    }

    public function setDateajout(\DateTimeInterface $dateajout): self
    {
        $this->dateajout = $dateajout;

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




}
