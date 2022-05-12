<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table(name="commandes", indexes={@ORM\Index(name="sk_user1", columns={"numeroUtilisateur"}), @ORM\Index(name="numeroProduit", columns={"numeroProduit"})})
 * @ORM\Entity
 */
class Commandes
{
    /**
     * @var int
     *
     * @ORM\Column(name="numeroCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numerocommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnvoi", type="date", nullable=false)
     */
    private $dateenvoi;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=30, nullable=false)
     */
    private $statut;

    /**
     * @var \Produits
     *
     * @ORM\ManyToOne(targetEntity="Produits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroProduit", referencedColumnName="numeroProduit")
     * })
     */
    private $numeroproduit;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroUtilisateur", referencedColumnName="numeroUtilisateurs")
     * })
     */
    private $numeroutilisateur;

    public function getNumerocommande(): ?int
    {
        return $this->numerocommande;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getDateenvoi(): ?\DateTimeInterface
    {
        return $this->dateenvoi;
    }

    public function setDateenvoi(\DateTimeInterface $dateenvoi): self
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getNumeroproduit(): ?Produits
    {
        return $this->numeroproduit;
    }

    public function setNumeroproduit(?Produits $numeroproduit): self
    {
        $this->numeroproduit = $numeroproduit;

        return $this;
    }

    public function getNumeroutilisateur(): ?Utilisateurs
    {
        return $this->numeroutilisateur;
    }

    public function setNumeroutilisateur(?Utilisateurs $numeroutilisateur): self
    {
        $this->numeroutilisateur = $numeroutilisateur;

        return $this;
    }


}
