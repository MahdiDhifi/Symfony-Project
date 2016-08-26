<?php

namespace News\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="categorie", columns={"categorie"})})
 * @ORM\Entity
 */
class Articles
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
     * @ORM\Column(name="contenue", type="text", nullable=true)
     */
    private $contenue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

  /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     * 
     *   @Assert\File(
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpeg", "image/gif","image/png","image/bmp"},
     *     mimeTypesMessage = "Invalide Photo"
     * )
     */
    private $image;
    
     /**
     * @var string
     *
     * @ORM\Column(name="image1", type="string", length=255, nullable=true)
     * 
     *   @Assert\File(
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpeg", "image/gif","image/png","image/bmp"},
     *     mimeTypesMessage = "Invalide Photo"
     * )
     */
    private $image1;
    
     /**
     * @var string
     *
     * @ORM\Column(name="image2", type="string", length=255, nullable=true)
     * 
     *   @Assert\File(
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpeg", "image/gif","image/png","image/bmp"},
     *     mimeTypesMessage = "Invalide Photo"
     * )
     */
    private $image2;

     /**
     * @var string
     *
     * @ORM\Column(name="image3", type="string", length=255, nullable=true)
     * 
     *   @Assert\File(
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpeg", "image/gif","image/png","image/bmp"},
     *     mimeTypesMessage = "Invalide Photo"
     * )
     */
    private $image3;
    
     /**
     * @var string
     *
     * @ORM\Column(name="image4", type="string", length=255, nullable=true)
     * 
     *   @Assert\File(
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpeg", "image/gif","image/png","image/bmp"},
     *     mimeTypesMessage = "Invalide Photo"
     * )
     */
    private $image4;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="image5", type="string", length=255, nullable=true)
     * 
     *   @Assert\File(
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpeg", "image/gif","image/png","image/bmp"},
     *     mimeTypesMessage = "Invalide Photo"
     * )
     */
    private $image5;
    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true)
     */
    

    private $video;

      /**
     * @var string
     *
     * @ORM\Column(name="parg1", type="text", nullable=true)
     */
    private $parg1;
      /**
     * @var string
     *
     * @ORM\Column(name="parg2", type="text", nullable=true)
     */
    private $parg2;
      /**
     * @var string
     *
     * @ORM\Column(name="parg3", type="text", nullable=true)
     */
    private $parg3;
      /**
     * @var string
     *
     * @ORM\Column(name="parg4", type="text", nullable=true)
     */
    private $parg4;
      /**
     * @var string
     *
     * @ORM\Column(name="parg5", type="text", nullable=true)
     */
    private $parg5;
    /**
     * @var integer
     *
     * @ORM\Column(name="good", type="integer", nullable=true)
     */
    private $good;

    /**
     * @var integer
     *
     * @ORM\Column(name="bad", type="integer", nullable=true)
     */
    private $bad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \News\AdminBundle\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="News\AdminBundle\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="id")
     * })
     */
    private $categorie;



    /**
     * Set titre
     *
     * @param string $titre
     * @return Articles
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
     * Set contenue
     *
     * @param string $contenue
     * @return Articles
     */
    public function setContenue($contenue)
    {
        $this->contenue = $contenue;

        return $this;
    }

    /**
     * Get contenue
     *
     * @return string 
     */
    public function getContenue()
    {
        return $this->contenue;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Articles
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
     * Set image
     *
     * @param string $image
     * @return Articles
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
     * Set image1
     *
     * @param string $image1
     * @return Articles
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string 
     */
    public function getImage1()
    {
        return $this->image1;
    }

    
    /**
     * Set image2
     *
     * @param string $image2
     * @return Articles
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string 
     */
    public function getImage2()
    {
        return $this->image2;
    }
    
    
    /**
     * Set image3
     *
     * @param string $image3
     * @return Articles
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return string 
     */
    public function getImage3()
    {
        return $this->image3;
    }
    
    
    /**
     * Set image4
     *
     * @param string $image4
     * @return Articles
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;

        return $this;
    }

    /**
     * Get image4
     *
     * @return string 
     */
    public function getImage4()
    {
        return $this->image4;
    }
    
    /**
     * Set image5
     *
     * @param string $image5
     * @return Articles
     */
    public function setImage5($image5)
    {
        $this->image5 = $image5;

        return $this;
    }

    /**
     * Get image5
     *
     * @return string 
     */
    public function getImage5()
    {
        return $this->image5;
    }
    /**
     * Set video
     *
     * @param string $video
     * @return Articles
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set good
     *
     * @param integer $good
     * @return Articles
     */
    public function setGood($good)
    {
        $this->good = $good;

        return $this;
    }

    /**
     * Get good
     *
     * @return integer 
     */
    public function getGood()
    {
        return $this->good;
    }

    /**
     * Set bad
     *
     * @param integer $bad
     * @return Articles
     */
    public function setBad($bad)
    {
        $this->bad = $bad;

        return $this;
    }

    /**
     * Get bad
     *
     * @return integer 
     */
    public function getBad()
    {
        return $this->bad;
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
     * Set categorie
     *
     * @param \News\AdminBundle\Entity\Categories $categorie
     * @return Articles
     */
    public function setCategorie(\News\AdminBundle\Entity\Categories $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \News\AdminBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    
    /**
     * Set parg1
     *
     * @param string $parg1
     * @return Articles
     */
    public function setParg1($parg1)
    {
        $this->parg1 = $parg1;

        return $this;
    }

    /**
     * Get parg1
     *
     * @return string 
     */
    public function getParg1()
    {
        return $this->parg1;
    }
    
    
    
        /**
     * Set parg2
     *
     * @param string $parg2
     * @return Articles
     */
    public function setParg2($parg2)
    {
        $this->parg2 = $parg2;

        return $this;
    }

    /**
     * Get parg2
     *
     * @return string 
     */
    public function getParg2()
    {
        return $this->parg2;
    }
    
    
        /**
     * Set parg3
     *
     * @param string $parg3
     * @return Articles
     */
    public function setParg3($parg3)
    {
        $this->parg3 = $parg3;

        return $this;
    }

    /**
     * Get parg3
     *
     * @return string 
     */
    public function getParg3()
    {
        return $this->parg3;
    }
    
    
        /**
     * Set parg4
     *
     * @param string $parg4
     * @return Articles
     */
    public function setParg4($parg4)
    {
        $this->parg4 = $parg4;

        return $this;
    }

    /**
     * Get parg4
     *
     * @return string 
     */
    public function getParg4()
    {
        return $this->parg4;
    }
    
    /**
     * Set parg5
     *
     * @param string $parg5
     * @return Articles
     */
    public function setParg5($parg5)
    {
        $this->parg5 = $parg5;

        return $this;
    }

    /**
     * Get parg5
     *
     * @return string 
     */
    public function getParg5()
    {
        return $this->parg5;
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
    
       public function upload1() {
// Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->image1) {
            return;
        }
// On garde le nom original du fichier de l'internaute
        $name = $this->getImage1()->getClientOriginalName();
// On déplace le fichier envoyé dans le répertoire de notre choix
        $this->image1->move($this->getUploadRootDir(), $name);
// On sauvegarde le nom de fichier dans notre attribut $url
        $this->setImage1($name);
    }

    
     public function upload2() {
// Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->image2) {
            return;
        }
// On garde le nom original du fichier de l'internaute
        $name = $this->getImage2()->getClientOriginalName();
// On déplace le fichier envoyé dans le répertoire de notre choix
        $this->image2->move($this->getUploadRootDir(), $name);
// On sauvegarde le nom de fichier dans notre attribut $url
        $this->setImage2($name);
    }
    
     public function upload3() {
// Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->image3) {
            return;
        }
// On garde le nom original du fichier de l'internaute
        $name = $this->getImage3()->getClientOriginalName();
// On déplace le fichier envoyé dans le répertoire de notre choix
        $this->image3->move($this->getUploadRootDir(), $name);
// On sauvegarde le nom de fichier dans notre attribut $url
        $this->setImage3($name);
    }
    
    
     public function upload4() {
// Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->image4) {
            return;
        }
// On garde le nom original du fichier de l'internaute
        $name = $this->getImage4()->getClientOriginalName();
// On déplace le fichier envoyé dans le répertoire de notre choix
        $this->image4->move($this->getUploadRootDir(), $name);
// On sauvegarde le nom de fichier dans notre attribut $url
        $this->setImage4($name);
    }
    
    
     public function upload5() {
// Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->image5) {
            return;
        }
// On garde le nom original du fichier de l'internaute
        $name = $this->getImage5()->getClientOriginalName();
// On déplace le fichier envoyé dans le répertoire de notre choix
        $this->image5->move($this->getUploadRootDir(), $name);
// On sauvegarde le nom de fichier dans notre attribut $url
        $this->setImage5($name);
    }
    public function getUploadDir() {
// On retourne le chemin relatif vers l'image pour un navigateur
        return 'articles';
    }

    protected function getUploadRootDir() {
// On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    function getState() {
        return $this->state;
    }

    function setState($state) {
        $this->state = $state;
    }
    
}










 
