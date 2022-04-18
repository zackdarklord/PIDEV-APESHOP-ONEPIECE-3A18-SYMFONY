<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paniers
 *
 * @ORM\Table(name="paniers", indexes={@ORM\Index(name="sk_produit", columns={"numeroProduit"}), @ORM\Index(name="sk_nom", columns={"nomProduit"}), @ORM\Index(name="sk_user", columns={"numeroUtilisateur"})})
 * @ORM\Entity
 */
class Paniers
{
    /**
     * @var int
     *
     * @ORM\Column(name="numeroPanier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numeropanier;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date", nullable=false)
     */
    private $dateajout;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroUtilisateur", referencedColumnName="numeroUtilisateurs")
     * })
     */
    private $numeroutilisateur;

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
     * @var \Produits
     *
     * @ORM\ManyToOne(targetEntity="Produits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomProduit", referencedColumnName="nomProduit")
     * })
     */
    private $nomproduit;

    public function getNumeropanier(): ?int
    {
        return $this->numeropanier;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
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

    public function getNumeroutilisateur(): ?Utilisateurs
    {
        return $this->numeroutilisateur;
    }

    public function setNumeroutilisateur(?Utilisateurs $numeroutilisateur): self
    {
        $this->numeroutilisateur = $numeroutilisateur;

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

    public function getNomproduit(): ?Produits
    {
        return $this->nomproduit;
    }

    public function setNomproduit(?Produits $nomproduit): self
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }


}
