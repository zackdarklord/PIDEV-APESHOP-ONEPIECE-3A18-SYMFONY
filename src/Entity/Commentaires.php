<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires", indexes={@ORM\Index(name="numeroUtilisateur", columns={"numeroUtilisateur"}), @ORM\Index(name="idForum", columns={"idForum"})})
 * @ORM\Entity(repositoryClass="App\Repository\CommentairesRepository")
 */
class Commentaires
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCommentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuCommentaire", type="string", length=100, nullable=false)
     */
    private $contenucommentaire;

    /**
     * @var \Forums
     *
     * @ORM\ManyToOne(targetEntity="Forums")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idForum", referencedColumnName="idForum")
     * })
     */
    private $idforum;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroUtilisateur", referencedColumnName="numeroUtilisateurs")
     * })
     */
    private $numeroutilisateur;

    public function getIdcommentaire(): ?int
    {
        return $this->idcommentaire;
    }

    public function getContenucommentaire(): ?string
    {
        return $this->contenucommentaire;
    }

    public function setContenucommentaire(string $contenucommentaire): self
    {
        $this->contenucommentaire = $contenucommentaire;

        return $this;
    }

    public function getIdforum(): ?Forums
    {
        return $this->idforum;
    }

    public function setIdforum(?Forums $idforum): self
    {
        $this->idforum = $idforum;

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
