<?php
/**
 * Created by PhpStorm.
 * User: casvanmarcel
 * Date: 10/25/13
 * Time: 1:08 PM
 */
namespace EShop\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="EShop\CoreBundle\Entity\Repository\ProductRepository")
 * @ORM\Table(name="products")
 * @ORM\HasLifecycleCallbacks()
 */
class Product {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $title;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=false)
     */
    protected $price = 0.00;

    /**
     * @ORM\ManyToOne(targetEntity="Author")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $author;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $isbn;


    /**
     * @ORM\Column(type="integer")
     */
    protected $appearance_year;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $short_description;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $stock = 0;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $active = true;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Product
     */
    public function setIsbn($isbn) {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn() {
        return $this->isbn;
    }

    /**
     * Set appearance_year
     *
     * @param integer $appearanceYear
     * @return Product
     */
    public function setAppearanceYear($appearanceYear) {
        $this->appearance_year = $appearanceYear;

        return $this;
    }

    /**
     * Get appearance_year
     *
     * @return integer
     */
    public function getAppearanceYear() {
        return $this->appearance_year;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set short_description
     *
     * @param string $shortDescription
     * @return Product
     */
    public function setShortDescription($shortDescription) {
        $this->short_description = $shortDescription;

        return $this;
    }

    /**
     * Get short_description
     *
     * @return string
     */
    public function getShortDescription() {
        return $this->short_description;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Product
     */
    public function setStock($stock) {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock() {
        return $this->stock;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Product
     */
    public function setActive($active) {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Set category
     *
     * @param \EShop\CoreBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\EShop\CoreBundle\Entity\Category $category = null) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \EShop\CoreBundle\Entity\Category
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Set author
     *
     * @param \EShop\CoreBundle\Entity\Author $author
     * @return Product
     */
    public function setAuthor(\EShop\CoreBundle\Entity\Author $author = null) {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \EShop\CoreBundle\Entity\Author
     */
    public function getAuthor() {
        return $this->author;
    }
}