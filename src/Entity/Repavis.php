<?php

namespace App\Entity;
use App\Entity\Avis;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\This;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Repavis
 *
 * @ORM\Table(name="repavis", indexes={@ORM\Index(name="idAvis", columns={"idAvis"})})
 * @ORM\Entity
 */
class Repavis
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRep", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrep;

    /**
     * @var string
     * @Assert\NotBlank (message="Choisissez un etat.")
     * @ORM\Column(name="etat", type="string", length=30, nullable=false)
     */
    private $etat;

    /**
     * @var string
     * @Assert\NotBlank (message="veuillez mettre une reponse.")
     * @ORM\Column(name="reponse", type="string", length=100, nullable=false)
     */
    private $reponse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date", nullable=false)
     */
    private $dateajout ;

    /**
     * @var \Avis
     * @Assert\NotBlank (message="Choisissez un avis.")
     * @ORM\ManyToOne(targetEntity="Avis" ,fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAvis", referencedColumnName="idAvis")
     * })
     */
    private $idavis;

    public function getIdrep(): ?int
    {
        return(int) $this->idrep;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }


    public function getDateajout(): ?\DateTimeInterface
    {
        return $this->dateajout;
    }

    public function setDateajout(\DateTimeInterface $dateajout): self
    {
        $this->dateajout = new \DateTime();

        return $this;
    }
    public function getIdavis(): ?Avis
    {
        return $this->idavis;
    }

    public function setIdavis(?Avis $idavis): self
    {
        $this->idavis = $idavis;

        return $this;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getReponse();
    }




}
