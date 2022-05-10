<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponses
 *
 * @ORM\Table(name="reponses", indexes={@ORM\Index(name="idCommentaire", columns={"idCommentaire"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReponsesRepository")
 */
class Reponses
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreponse;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuReponse", type="string", length=500, nullable=false)
     */
    private $contenureponse;

    /**
     * @var \Commentaires
     *
     * @ORM\ManyToOne(targetEntity="Commentaires")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCommentaire", referencedColumnName="idCommentaire")
     * })
     */
    private $idcommentaire;

    public function getIdreponse(): ?int
    {
        return $this->idreponse;
    }

    public function getContenureponse(): ?string
    {
        return $this->contenureponse;
    }

    public function setContenureponse(string $contenureponse): self
    {
        $this->contenureponse = $contenureponse;

        return $this;
    }

    public function getIdcommentaire(): ?Commentaires
    {
        return $this->idcommentaire;
    }

    public function setIdcommentaire(?Commentaires $idcommentaire): self
    {
        $this->idcommentaire = $idcommentaire;

        return $this;
    }


}
