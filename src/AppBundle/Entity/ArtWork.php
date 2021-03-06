<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtWork
 *
 * @ORM\Table(name="art_work")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtWorkRepository")
 */
class ArtWork
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Time", inversedBy="times")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    /**
     * @var int
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Artist", inversedBy="artWorks")
     */
    private $artist;
    /**
     * @var int
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Style", inversedBy="artWorks")
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="long_description", type="text")
     */
    private $long_description;

    /**
     * @var int
     *
     * @ORM\Column(name="coordX", type="integer")
     */
    private $coordX;

    /**
     * @var int
     *
     * @ORM\Column(name="coordY", type="integer")
     */
    private $coordY;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="enigma", type="text")
     */
    private $enigma;
    /**
     * @var float
     * @ORM\Column(name="size_h", type="float")
     */
    private $sizeH;
    /**
     * @var float
     * @ORM\Column(name="size_w", type="float")
     */
    private $sizeW;
    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text")
     */
    private $answer;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Type", inversedBy="artWorks")
     */
    private $type;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Favorite", mappedBy="oeuvre")
     *
     */
    private $oeuvres;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tech", inversedBy="artWorks")
     */
    private $tech;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Materials", inversedBy="artWorks")
     */
    private $materials;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Room", inversedBy="artWorks")
     */
    private $room;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Museum", inversedBy="artWorks")
     */
    private $museum;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paint", inversedBy="artWorks")
     */
    private $paint;

    /**
     * @ORM\OneToOne(targetEntity="Tile", mappedBy="artwork")
     * @ORM\JoinColumn(name="tile_id", referencedColumnName="id")
     */
    private $tile;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ArtWork
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ArtWork
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set coordX
     *
     * @param integer $coordX
     *
     * @return ArtWork
     */
    public function setCoordX($coordX)
    {
        $this->coordX = $coordX;

        return $this;
    }

    /**
     * Get coordX
     *
     * @return int
     */
    public function getCoordX()
    {
        return $this->coordX;
    }

    /**
     * Set coordY
     *
     * @param integer $coordY
     *
     * @return ArtWork
     */
    public function setCoordY($coordY)
    {
        $this->coordY = $coordY;

        return $this;
    }

    /**
     * Get coordY
     *
     * @return int
     */
    public function getCoordY()
    {
        return $this->coordY;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ArtWork
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set enigma
     *
     * @param string $enigma
     *
     * @return ArtWork
     */
    public function setEnigma($enigma)
    {
        $this->enigma = $enigma;

        return $this;
    }

    /**
     * Get enigma
     *
     * @return string
     */
    public function getEnigma()
    {
        return $this->enigma;
    }

    /**
     * Set answer
     *
     * @param string $answer
     *
     * @return ArtWork
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\Type $type
     *
     * @return ArtWork
     */
    public function setType(\AppBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set tech
     *
     * @param \AppBundle\Entity\Tech $tech
     *
     * @return ArtWork
     */
    public function setTech(\AppBundle\Entity\Tech $tech = null)
    {
        $this->tech = $tech;

        return $this;
    }

    /**
     * Get tech
     *
     * @return \AppBundle\Entity\Tech
     */
    public function getTech()
    {
        return $this->tech;
    }

    /**
     * Set materials
     *
     * @param \AppBundle\Entity\Materials $materials
     *
     * @return ArtWork
     */
    public function setMaterials(\AppBundle\Entity\Materials $materials = null)
    {
        $this->materials = $materials;

        return $this;
    }

    /**
     * Get materials
     *
     * @return \AppBundle\Entity\Materials
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set room
     *
     * @param \AppBundle\Entity\Room $room
     *
     * @return ArtWork
     */
    public function setRoom(\AppBundle\Entity\Room $room = null)
    {
        $this->room = $room;
    }

    /**
     * Set longDescription
     *
     * @param string $longDescription
     *
     * @return ArtWork
     */
    public function setLongDescription($longDescription)
    {
        $this->long_description = $longDescription;

        return $this;
    }

    /**
     * Get room
     *
     * @return \AppBundle\Entity\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set museum
     *
     * @param \AppBundle\Entity\Museum $museum
     *
     * @return ArtWork
     */
    public function setMuseum(\AppBundle\Entity\Museum $museum = null)
    {
        $this->museum = $museum;

        return $this;
    }

    /**
     * Get museum
     *
     * @return \AppBundle\Entity\Museum
     */
    public function getMuseum()
    {
        return $this->museum;
    }

    /**
     * Set paint
     *
     * @param \AppBundle\Entity\Paint $paint
     *
     * @return ArtWork
     */
    public function setPaint(\AppBundle\Entity\Paint $paint = null)
    {
        $this->paint = $paint;

        return $this;
    }

    /**
     * Get paint
     *
     * @return \AppBundle\Entity\Paint
     */
    public function getPaint()
    {
        return $this->paint;
    }

    /**
     * Set sizeH
     *
     * @param float $sizeH
     *
     * @return ArtWork
     */
    public function setSizeH($sizeH)
    {
        $this->sizeH = $sizeH;

        return $this;
    }

    /**
     * Get sizeH
     *
     * @return float
     */
    public function getSizeH()
    {
        return $this->sizeH;
    }

    /**
     * Set sizeW
     *
     * @param float $sizeW
     *
     * @return ArtWork
     */
    public function setSizeW($sizeW)
    {
        $this->sizeW = $sizeW;

        return $this;
    }

    /**
     * Get sizeW
     *
     * @return float
     */
    public function getSizeW()
    {
        return $this->sizeW;
    }

    /**
     * Get longDescription
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->long_description;
    }

    /**
     * Set tile
     *
     * @param \AppBundle\Entity\Tile $tile
     *
     * @return ArtWork
     */
    public function setTile(\AppBundle\Entity\Tile $tile = null)
    {
        $this->tile = $tile;

        return $this;
    }

    /**
     * Get tile
     *
     * @return \AppBundle\Entity\Tile
     */
    public function getTile()
    {
        return $this->tile;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return ArtWork
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /** 
     * Set artist
     *
     * @param \AppBundle\Entity\Artist $artist
     *
     * @return ArtWork
     */
    public function setArtist(\AppBundle\Entity\Artist $artist = null)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return \AppBundle\Entity\Artist
     */
    public function getArtist()
    {
        return $this->artist;
    }
  
     /**
     * Get oeuvres
     *
     * @return \AppBundle\Entity\Favorite
     */
    public function getOeuvres()
    {
        return $this->oeuvres;
    }

    /**
     * Set oeuvre
     *
     * @param \AppBundle\Entity\Favorite $oeuvre
     *
     * @return ArtWork
     */
    public function setOeuvre(\AppBundle\Entity\Favorite $oeuvre = null)
    {
        $this->oeuvre = $oeuvre;

        return $this;
    }

    /**
     * Get oeuvre
     *
     * @return \AppBundle\Entity\Favorite
     */
    public function getOeuvre()
    {
        return $this->oeuvre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oeuvres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add oeuvre
     *
     * @param \AppBundle\Entity\Favorite $oeuvre
     *
     * @return ArtWork
     */
    public function addOeuvre(\AppBundle\Entity\Favorite $oeuvre)
    {
        $this->oeuvres[] = $oeuvre;

        return $this;
    }

    /**
     * Remove oeuvre
     *
     * @param \AppBundle\Entity\Favorite $oeuvre
     */
    public function removeOeuvre(\AppBundle\Entity\Favorite $oeuvre)
    {
        $this->oeuvres->removeElement($oeuvre);
    }

    /**
<<<<<<< HEAD
     * Set time
     *
     * @param \AppBundle\Entity\Time $time
     *
     * @return ArtWork
     */
    public function setTime(\AppBundle\Entity\Time $time = null)
    {
        $this->time = $time;
    }

    /**
     * Set style
     *
     * @param \AppBundle\Entity\Style $style
     *
     * @return ArtWork
     */
    public function setStyle(\AppBundle\Entity\Style $style = null)
    {
        $this->style = $style;
        return $this;
    }

    /**
     * Get time
     *
     * @return \AppBundle\Entity\Time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Get style
     *
     * @return \AppBundle\Entity\Style
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return ArtWork
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
