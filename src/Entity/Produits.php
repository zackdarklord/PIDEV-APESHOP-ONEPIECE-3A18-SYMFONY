<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Produits
 *
 * @ORM\Table(name="produits", uniqueConstraints={@ORM\UniqueConstraint(name="nomProduit", columns={"nomProduit"})})
 * @ORM\Entity
 */
class Produits
{
    /**
     * @var int
     *
     * @ORM\Column(name="numeroProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numeroproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProduit", type="string", length=30, nullable=false)
     */
    private $nomproduit;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     * * @Assert\Range(
     *   min=1,
     *   max=30
     * )
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaire", type="float", precision=10, scale=0, nullable=false)
     *  @Assert\Range(
     *   min=10,
     *   max=2000
     * )
     */
    private $prixunitaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCategorie", type="string", length=30, nullable=false)
     */
    private $nomcategorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getNumeroproduit(): ?int
    {
        return $this->numeroproduit;
    }

    public function getNomproduit(): ?string
    {
        return $this->nomproduit;
    }

    public function setNomproduit(string $nomproduit): self
    {
        $this->nomproduit = $nomproduit;

        return $this;
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

    public function getPrixunitaire(): ?float
    {
        return $this->prixunitaire;
    }

    public function setPrixunitaire(float $prixunitaire): self
    {
        $this->prixunitaire = $prixunitaire;

        return $this;
    }

    public function getNomcategorie(): ?string
    {
        return $this->nomcategorie;
    }

    public function setNomcategorie(string $nomcategorie): self
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

public function __toString()
{
    // TODO: Implement __toString() method.
    return $this->nomproduit;
}

}
