<?php

namespace News\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Table(name="gallery", indexes={@ORM\Index(name="album", columns={"album"})})
 * @ORM\Entity
 */
class Gallery
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \News\AdminBundle\Entity\Album
     *
     * @ORM\ManyToOne(targetEntity="News\AdminBundle\Entity\Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="album", referencedColumnName="id")
     * })
     */
    private $album;



    /**
     * Set titre
     *
     * @param string $titre
     * @return Gallery
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Gallery
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
     * Set image
     *
     * @param string $image
     * @return Gallery
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

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Gallery
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set album
     *
     * @param \News\AdminBundle\Entity\Album $album
     * @return Gallery
     */
    public function setAlbum(\News\AdminBundle\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \News\AdminBundle\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }
    
      public function upload() {
// Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->image) {
            return;
        }
// On garde le nom original du fichier de l'internaute
        $name = $this->getImage()->getClientOriginalName();
// On déplace le fichier envoyé dans le répertoire de notre choix
        $this->image->move($this->getUploadRootDir(), $name);
// On sauvegarde le nom de fichier dans notre attribut $url
        $this->setImage($name);
    }
    
}
