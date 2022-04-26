<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factures
 *
 * @ORM\Table(name="factures", indexes={@ORM\Index(name="sk_user3", columns={"numeroUtilisateur"})})
 * @ORM\Entity(repositoryClass="App\Repository\FacturesRepository")
 */
class Factures
{
    /**
     * @var int
     *
     * @ORM\Column(name="numeroFacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numerofacture;

    /**
     * @var string
     *
     * @ORM\Column(name="typeLivraison", type="string", length=30, nullable=false)
     */
    private $typelivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="prixLivraison", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixlivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroRegionDestinataire", type="integer", nullable=false)
     */
    private $numeroregiondestinataire;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroUtilisateur", referencedColumnName="numeroUtilisateurs")
     * })
     */
    private $numeroutilisateur;

    public function getNumerofacture(): ?int
    {
        return $this->numerofacture;
    }

    public function getTypelivraison(): ?string
    {
        return $this->typelivraison;
    }

    public function setTypelivraison(string $typelivraison): self
    {
        $this->typelivraison = $typelivraison;

        return $this;
    }

    public function getPrixlivraison(): ?float
    {
        return $this->prixlivraison;
    }

    public function setPrixlivraison(float $prixlivraison): self
    {
        $this->prixlivraison = $prixlivraison;

        return $this;
    }

    public function getNumeroregiondestinataire(): ?int
    {
        return $this->numeroregiondestinataire;
    }

    public function setNumeroregiondestinataire(int $numeroregiondestinataire): self
    {
        $this->numeroregiondestinataire = $numeroregiondestinataire;

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