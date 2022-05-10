<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="sk_categorie", columns={"nomCategorie"}), @ORM\Index(name="sk_user2", columns={"numeroUtilisateur"})})
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAvis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idavis;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuAvis", type="string", length=100, nullable=false)
     */
    private $contenuavis;

    /**
     * @var \Categoriea
     *
     * @ORM\ManyToOne(targetEntity="Categoriea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomCategorie", referencedColumnName="nomCategorie")
     * })
     */
    private $nomcategorie;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroUtilisateur", referencedColumnName="numeroUtilisateurs")
     * })
     */
    private $numeroutilisateur;

    public function getIdavis(): ?int
    {
        return $this->idavis;
    }

    public function getContenuavis(): ?string
    {
        return $this->contenuavis;
    }

    public function setContenuavis(string $contenuavis): self
    {
        $this->contenuavis = $contenuavis;

        return $this;
    }

    public function getNomcategorie(): ?Categoriea
    {
        return $this->nomcategorie;
    }

    public function setNomcategorie(?Categoriea $nomcategorie): self
    {
        $this->nomcategorie = $nomcategorie;

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
