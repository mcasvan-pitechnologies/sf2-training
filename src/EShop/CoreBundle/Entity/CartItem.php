<?php
/**
 * Created by PhpStorm.
 * User: casvanmarcel
 * Date: 10/25/13
 * Time: 6:36 PM
 */

namespace EShop\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="cart_items")
 */
class CartItem {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Cart")
     * @ORM\Column(nullable=false)
     * @ORM\JoinColumn(name="cart_id", referencedColumnName="id")
     */
    protected $cart;

    /**
     * @ORM\OneToOne(targetEntity="Product")
     * @ORM\Column(nullable=false)
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    protected $product;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $quantity;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=false)
     */
    protected $price = 0.00;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cart
     *
     * @param string $cart
     * @return CartItem
     */
    public function setCart($cart) {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return string
     */
    public function getCart() {
        return $this->cart;
    }

    /**
     * Set product
     *
     * @param string $product
     * @return CartItem
     */
    public function setProduct($product) {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct() {
        return $this->product;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return CartItem
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
     * Set quantity
     *
     * @param integer $quantity
     * @return CartItem
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return CartItem
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
}