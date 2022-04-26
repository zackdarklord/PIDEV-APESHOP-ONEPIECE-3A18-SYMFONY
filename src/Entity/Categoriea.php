<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoriea
 *
 * @ORM\Table(name="categoriea", uniqueConstraints={@ORM\UniqueConstraint(name="nomCategorie", columns={"nomCategorie"})})
 * @ORM\Entity(repositoryClass="App\Repository\CategorieaRepository")
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
     * @var string
     *
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


}