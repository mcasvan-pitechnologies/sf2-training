<?php
/**
 * Created by PhpStorm.
 * User: casvanmarcel
 * Date: 10/25/13
 * Time: 6:55 PM
 */

namespace EShop\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="orders")
 */
class Order {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Adress")
     * @ORM\JoinColumn(name="billing_address_id", referencedColumnName="id")
     */
    protected $billing_adress;

    /**
     * @ORM\ManyToOne(targetEntity="Adress")
     * @ORM\JoinColumn(name="shipping_address_id", referencedColumnName="id")
     */
    protected $shipping_address;

    /**
     * @ORM\ManyToOne(targetEntity="Cart")
     * @ORM\JoinColumn(name="cart_id", referencedColumnName="id")
     */
    protected $cart;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=false)
     */
    protected $total = 0.00;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * @ORM\ManyToMany(targetEntity="State")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     */
    protected $state;

    /**
     * Constructor
     */
    public function __construct() {
        $this->state = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return Order
     */
    public function setTotal($total) {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Order
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param \EShop\CoreBundle\Entity\User $user
     * @return Order
     */
    public function setUser(\EShop\CoreBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EShop\CoreBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set billing_adress
     *
     * @param \EShop\CoreBundle\Entity\Adress $billingAdress
     * @return Order
     */
    public function setBillingAdress(\EShop\CoreBundle\Entity\Adress $billingAdress = null) {
        $this->billing_adress = $billingAdress;

        return $this;
    }

    /**
     * Get billing_adress
     *
     * @return \EShop\CoreBundle\Entity\Adress
     */
    public function getBillingAdress() {
        return $this->billing_adress;
    }

    /**
     * Set shipping_address
     *
     * @param \EShop\CoreBundle\Entity\Adress $shippingAddress
     * @return Order
     */
    public function setShippingAddress(\EShop\CoreBundle\Entity\Adress $shippingAddress = null) {
        $this->shipping_address = $shippingAddress;

        return $this;
    }

    /**
     * Get shipping_address
     *
     * @return \EShop\CoreBundle\Entity\Adress
     */
    public function getShippingAddress() {
        return $this->shipping_address;
    }

    /**
     * Set cart
     *
     * @param \EShop\CoreBundle\Entity\Cart $cart
     * @return Order
     */
    public function setCart(\EShop\CoreBundle\Entity\Cart $cart = null) {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return \EShop\CoreBundle\Entity\Cart
     */
    public function getCart() {
        return $this->cart;
    }

    /**
     * Add state
     *
     * @param \EShop\CoreBundle\Entity\State $state
     * @return Order
     */
    public function addState(\EShop\CoreBundle\Entity\State $state) {
        $this->state[] = $state;

        return $this;
    }

    /**
     * Remove state
     *
     * @param \EShop\CoreBundle\Entity\State $state
     */
    public function removeState(\EShop\CoreBundle\Entity\State $state) {
        $this->state->removeElement($state);
    }

    /**
     * Get state
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getState() {
        return $this->state;
    }
}