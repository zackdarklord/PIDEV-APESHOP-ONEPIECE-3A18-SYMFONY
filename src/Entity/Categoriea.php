<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Categoriea
 *
 * @ORM\Table(name="categoriea")
 * @ORM\Entity
 */
class Categoriea
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     *
     * @var string
     * @ORM\Column(name="nomCategorie", type="string", length=30, nullable=false)
     * @Assert\NotBlank (message="veuillez mettre une categorie.")
     *
     * @Assert\Length (min=3,max=30,minMessage="trop court.",maxMessage="trop long.")
     * @ORM\Column(name="nomCategorie", type="string", length=30, nullable=false)
     */
    private $nomcategorie;

    public function getIdcategorie(): ?int
    {
        return $this->idcategorie;
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

public function __toString()
{
 return $this->getNomcategorie();
}
}
