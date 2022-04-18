<?php


namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Repavis;
use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="idRep", columns={"idRep"}), @ORM\Index(name="idCategorie", columns={"idCategorie"}), @ORM\Index(name="sk_user2", columns={"numeroUtilisateur"}), @ORM\Index(name="nomCategorie", columns={"idCategorie"})})
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
     * @Assert\NotBlank (message="Veuillez mettre un avis.")
     * @Assert\Length (min=3,max=100,minMessage="trop court",maxMessage="trop long")
     *
     * @ORM\Column(name="contenuAvis", type="string", length=100, nullable=false)
     */
    private $contenuavis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date", nullable=false)
     */
    private $dateajout;

    /**
     * @Assert\NotBlank (message="Ne peut pas etre vide")
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs",fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroUtilisateur", referencedColumnName="numeroUtilisateurs")
     * })
     */
    private $numeroutilisateur;


    /**
     * @var \Categoriea
     * @Assert\NotBlank (message="Choisissez une categorie.")
     * @ORM\ManyToOne(targetEntity="Categoriea",fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategorie", referencedColumnName="idCategorie")
     * })
     */
    private $idcategorie;
    /**
     * @var \Repavis
     *
     * @ORM\ManyToOne(targetEntity="Repavis",fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRep", referencedColumnName="idRep")
     * })
     */
    private $idrep;

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

    public function getDateajout(): ?\DateTimeInterface
    {
        return $this->dateajout;
    }

    public function setDateajout(\DateTimeInterface $dateajout): self
    {
        $this->dateajout = new \DateTime();

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


    public function getIdcategorie(): ?Categoriea
    {
        return $this->idcategorie;
    }

    public function setIdcategorie(?Categoriea $idcategorie): self
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    public function __toString()
    {
        return(string) $this->contenuavis;
    }

    public function getIdrep(): ?Repavis
    {
        return $this->idrep;
    }

    public function setIdrep(?Repavis $idrep): self
    {
        $this->idrep = $idrep;

        return $this;
    }


}

