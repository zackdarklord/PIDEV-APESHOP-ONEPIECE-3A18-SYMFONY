<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
//use phpDocumentor\Reflection\File;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateursRepository")
 * @Vich\Uploadable
 */
class Utilisateurs implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="numeroUtilisateurs", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $numeroutilisateurs;

    /**
     * @var string
     * @Assert\NotBlank
     *@Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * @ORM\Column(name="email", type="string", length=30, nullable=false)
     * @Groups("post:read")
     */
    private $email;

    /**
     * @var string
     * @Assert\NotBlank
     *@Assert\Regex(
     *     pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/",
     *     message="
    Min 1 uppercase letter.
    Min 1 lowercase letter.
    Min 1 special character.
    Min 1 number.
    Min 8 characters.
    Max 30 characters.
    "
     * )
     * @ORM\Column(name="motDePasse", type="string", length=100, nullable=false)
     * @Groups("post:read")
     */
    private $motdepasse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="date", nullable=false)
     * @Groups("post:read")
     */
    private $dateinscription;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=30, nullable=false)
     * @Groups("post:read")
     */
    private $role;

    /**
     * @var string|null
     *
     *
     * @Assert\NotBlank
     * @Assert\Length(
     * min = 5,
     * max = 30,
     * minMessage = "nom client must be at least {{ limit }} characters long",
     * maxMessage = "nom client cannot be longer than {{ limit }} characters"
     * )
     *@ORM\Column(name="nomClient", type="string", length=30, nullable=true)
     * @Groups("post:read")
     */
    private $nomclient;

    /**
     * @var string|null
     *
     * @Assert\Length(
     * min = 5,
     * max = 30,
     * minMessage = "nom admin must be at least {{ limit }} characters long",
     * maxMessage = "nom admin cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(name="nomAdmin", type="string", length=30, nullable=true)
     * @Groups("post:read")
     */
    private $nomadmin;

    /**
     * @var string|null
     *
     *@Assert\Length(
     * min = 5,
     * max = 50,
     * minMessage = "adresse must be at least {{ limit }} characters long",
     * maxMessage = "adresse cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(name="adresse", type="string", length=30, nullable=true)
     * @Groups("post:read")
     */
    private $adresse;

    /**
     * @var string|null
     *
     *@Assert\Regex(
     *     pattern="/^[0-9]{16}$/",
     *     message="credit card number should contain 16 digits"
     * )
     * @ORM\Column(name="infoCarteBancaire", type="string", length=30, nullable=true)
     * @Groups("post:read")
     */
    private $infocartebancaire;

    /**
     * @var int|null
     *
     * @Assert\Length(
     * min = 8,
     * max = 8,
     * minMessage = "num tel must be at least {{ limit }} digits long",
     * maxMessage = "num tel cannot be longer than {{ limit }} digits"
     * )
     * @ORM\Column(name="numTel", type="integer", nullable=true)
     * @Groups("post:read")
     */
    private $numtel;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="Utilisateurs", fileNameProperty="imageName")
     *
     * @var File|null
     * @Groups("post:read")
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string")
     *
     * @var string|null
     * @Groups("post:read")
     */
    private $imageName;



    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTimeInterface|null
     *
     */
    private $updatedAt;

    public function getNumeroutilisateurs(): ?int
    {
        return $this->numeroutilisateurs;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getDateinscription(): ?\DateTimeInterface
    {
        return $this->dateinscription;
    }

    public function setDateinscription(\DateTimeInterface $dateinscription): self
    {
        $this->dateinscription = $dateinscription;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(?string $nomclient): self
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getNomadmin(): ?string
    {
        return $this->nomadmin;
    }

    public function setNomadmin(?string $nomadmin): self
    {
        $this->nomadmin = $nomadmin;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getInfocartebancaire(): ?string
    {
        return $this->infocartebancaire;
    }

    public function setInfocartebancaire(?string $infocartebancaire): self
    {
        $this->infocartebancaire = $infocartebancaire;

        return $this;
    }

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(?int $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }
    /*
    public function __toString()
    {
        // TODO: Implement __toString() method.
    return(string)$this->getNumeroutilisateurs();
    }
    */
    public function getRoles()
    {
        return $this->getRole();
    }

    public function getPassword()
    {
        return $this->getMotdepasse();
    }

    public function getSalt()
    {
        return "";
    }

    public function getUsername()
    {
        return $this->getNomclient();
    }

    public function eraseCredentials()
    {
        return "";
    }


    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }


    /**
     * @param \DateTimeInterface|null $updatedAt
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

  public function __toString()
  {
      return (string) $this->getNumeroutilisateurs();
  }
}



