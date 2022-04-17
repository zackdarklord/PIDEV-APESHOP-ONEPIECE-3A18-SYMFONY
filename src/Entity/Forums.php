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


}
