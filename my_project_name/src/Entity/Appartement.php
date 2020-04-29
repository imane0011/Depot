<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AppartementRepository")
 */
class Appartement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $code;

    /**
     * @ORM\Column(type="float")
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbpieces;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $calme;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $transport;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $balcon;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $surfaccebalcon;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $terrasse;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $surfaceterrasse;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cave;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbcave;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $parking;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbparking;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $region;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbchambres;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbetages;

    /**
     * @ORM\Column(type="integer")
     */
    private $etage;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ascenceur;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $pareno;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $facade;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $luminosite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $qualite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $etat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annee;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbsalleb;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vue;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ref;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNbpieces(): ?int
    {
        return $this->nbpieces;
    }

    public function setNbpieces(int $nbpieces): self
    {
        $this->nbpieces = $nbpieces;

        return $this;
    }

    public function getCalme(): ?int
    {
        return $this->calme;
    }

    public function setCalme(?int $calme): self
    {
        $this->calme = $calme;

        return $this;
    }

    public function getTransport(): ?int
    {
        return $this->transport;
    }

    public function setTransport(?int $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getBalcon(): ?bool
    {
        return $this->balcon;
    }

    public function setBalcon(?bool $balcon): self
    {
        $this->balcon = $balcon;

        return $this;
    }

    public function getSurfaccebalcon(): ?float
    {
        return $this->surfaccebalcon;
    }

    public function setSurfaccebalcon(?float $surfaccebalcon): self
    {
        $this->surfaccebalcon = $surfaccebalcon;

        return $this;
    }

    public function getTerrasse(): ?bool
    {
        return $this->terrasse;
    }

    public function setTerrasse(?bool $terrasse): self
    {
        $this->terrasse = $terrasse;

        return $this;
    }

    public function getSurfaceterrasse(): ?float
    {
        return $this->surfaceterrasse;
    }

    public function setSurfaceterrasse(?float $surfaceterrasse): self
    {
        $this->surfaceterrasse = $surfaceterrasse;

        return $this;
    }

    public function getCave(): ?bool
    {
        return $this->cave;
    }

    public function setCave(?bool $cave): self
    {
        $this->cave = $cave;

        return $this;
    }

    public function getNbcave(): ?int
    {
        return $this->nbcave;
    }

    public function setNbcave(?int $nbcave): self
    {
        $this->nbcave = $nbcave;

        return $this;
    }

    public function getParking(): ?bool
    {
        return $this->parking;
    }

    public function setParking(?bool $parking): self
    {
        $this->parking = $parking;

        return $this;
    }

    public function getNbparking(): ?int
    {
        return $this->nbparking;
    }

    public function setNbparking(?int $nbparking): self
    {
        $this->nbparking = $nbparking;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getNbchambres(): ?int
    {
        return $this->nbchambres;
    }

    public function setNbchambres(int $nbchambres): self
    {
        $this->nbchambres = $nbchambres;

        return $this;
    }

    public function getNbetages(): ?int
    {
        return $this->nbetages;
    }

    public function setNbetages(int $nbetages): self
    {
        $this->nbetages = $nbetages;

        return $this;
    }

    public function getEtage(): ?int
    {
        return $this->etage;
    }

    public function setEtage(int $etage): self
    {
        $this->etage = $etage;

        return $this;
    }

    public function getAscenceur(): ?bool
    {
        return $this->ascenceur;
    }

    public function setAscenceur(?bool $ascenceur): self
    {
        $this->ascenceur = $ascenceur;

        return $this;
    }

    public function getPareno(): ?bool
    {
        return $this->pareno;
    }

    public function setPareno(?bool $pareno): self
    {
        $this->pareno = $pareno;

        return $this;
    }

    public function getFacade(): ?bool
    {
        return $this->facade;
    }

    public function setFacade(?bool $facade): self
    {
        $this->facade = $facade;

        return $this;
    }

    public function getLuminosite(): ?int
    {
        return $this->luminosite;
    }

    public function setLuminosite(?int $luminosite): self
    {
        $this->luminosite = $luminosite;

        return $this;
    }

    public function getQualite(): ?int
    {
        return $this->qualite;
    }

    public function setQualite(?int $qualite): self
    {
        $this->qualite = $qualite;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(?int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbsalleb(): ?int
    {
        return $this->nbsalleb;
    }

    public function setNbsalleb(int $nbsalleb): self
    {
        $this->nbsalleb = $nbsalleb;

        return $this;
    }

    public function getVue(): ?bool
    {
        return $this->vue;
    }

    public function setVue(?bool $vue): self
    {
        $this->vue = $vue;

        return $this;
    }

    public function getRef(): ?bool
    {
        return $this->ref;
    }

    public function setRef(?bool $ref): self
    {
        $this->ref = $ref;

        return $this;
    }
}
