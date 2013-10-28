<?php
/**
 * Created by PhpStorm.
 * User: casvanmarcel
 * Date: 10/25/13
 * Time: 6:32 PM
 */

namespace EShop\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="carts")
 * @ORM\HasLifecycleCallbacks()
 */
class Cart {
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
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $date;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    protected $active = true;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=false)
     */
    protected $total = 0.00;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Cart
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
     * Set active
     *
     * @param boolean $active
     * @return Cart
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
     * Set total
     *
     * @param float $total
     * @return Cart
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
     * Set user
     *
     * @param \EShop\CoreBundle\Entity\User $user
     * @return Cart
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
}