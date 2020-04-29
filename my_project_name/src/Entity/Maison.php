<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MaisonRepository")
 */
class Maison
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbchambre;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbpiece;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbsalleb;

    /**
     * @ORM\Column(type="float")
     */
    private $surfaceh;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $postal;

    /**
     * @ORM\Column(type="string", length=70, nullable=true)
     */
    private $region;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annee;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveau;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ref;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $piscine;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $sous;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $sousur;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $park;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbpark;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $mur;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbmur;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $bat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbbat;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vue;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $eaux;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $etat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $qualite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $luminosite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $calme;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $transport;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $energie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $toiture;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNbchambre(): ?int
    {
        return $this->nbchambre;
    }

    public function setNbchambre(int $nbchambre): self
    {
        $this->nbchambre = $nbchambre;

        return $this;
    }

    public function getNbpiece(): ?int
    {
        return $this->nbpiece;
    }

    public function setNbpiece(int $nbpiece): self
    {
        $this->nbpiece = $nbpiece;

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

    public function getSurfaceh(): ?float
    {
        return $this->surfaceh;
    }

    public function setSurfaceh(float $surfaceh): self
    {
        $this->surfaceh = $surfaceh;

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

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPostal(): ?string
    {
        return $this->postal;
    }

    public function setPostal(string $postal): self
    {
        $this->postal = $postal;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

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

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getRef(): ?bool
    {
        return $this->ref;
    }

    public function setRef(bool $ref): self
    {
        $this->ref = 0;

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

    public function getPiscine(): ?bool
    {
        return $this->piscine;
    }

    public function setPiscine(?bool $piscine): self
    {
        $this->piscine = $piscine;

        return $this;
    }

    public function getSous(): ?bool
    {
        return $this->sous;
    }

    public function setSous(?bool $sous): self
    {
        $this->sous = $sous;

        return $this;
    }

    public function getSousur(): ?float
    {
        return $this->sousur;
    }

    public function setSousur(?float $sousur): self
    {
        $this->sousur = $sousur;

        return $this;
    }

    public function getPark(): ?bool
    {
        return $this->park;
    }

    public function setPark(?bool $park): self
    {
        $this->park = $park;

        return $this;
    }

    public function getNbpark(): ?int
    {
        return $this->nbpark;
    }

    public function setNbpark(?int $nbpark): self
    {
        $this->nbpark = $nbpark;

        return $this;
    }

    public function getMur(): ?bool
    {
        return $this->mur;
    }

    public function setMur(?bool $mur): self
    {
        $this->mur = $mur;

        return $this;
    }

    public function getNbmur(): ?int
    {
        return $this->nbmur;
    }

    public function setNbmur(?int $nbmur): self
    {
        $this->nbmur = $nbmur;

        return $this;
    }

    public function getBat(): ?bool
    {
        return $this->bat;
    }

    public function setBat(?bool $bat): self
    {
        $this->bat = $bat;

        return $this;
    }

    public function getNbbat(): ?int
    {
        return $this->nbbat;
    }

    public function setNbbat(?int $nbbat): self
    {
        $this->nbbat = $nbbat;

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

    public function getEaux(): ?bool
    {
        return $this->eaux;
    }

    public function setEaux(?bool $eaux): self
    {
        $this->eaux = $eaux;

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

    public function getQualite(): ?int
    {
        return $this->qualite;
    }

    public function setQualite(?int $qualite): self
    {
        $this->qualite = $qualite;

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

    public function getEnergie(): ?int
    {
        return $this->energie;
    }

    public function setEnergie(?int $energie): self
    {
        $this->energie = $energie;

        return $this;
    }

    public function getToiture(): ?int
    {
        return $this->toiture;
    }

    public function setToiture(?int $toiture): self
    {
        $this->toiture = $toiture;

        return $this;
    }
}
