<?php
/**
 * Created by PhpStorm.
 * User: casvanmarcel
 * Date: 10/25/13
 * Time: 7:09 PM
 */

namespace EShop\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="users")
 * @ORM\HasLifecycleCallbacks()
 */
class User {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @ORM\Column(type="boolean")
     * if 'male' set to true
     */
    protected $gender = true;

    /**
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     */
    protected $role;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $activated = true;

    /**
     * @ORM\Column(type="string", nullable=false, length=40)
     */
    protected $activation_key;

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
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    public function __construct() {
        $this->setCreated(new \DateTime());
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone) {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return User
     */
    public function setGender($gender) {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * Set activated
     *
     * @param boolean $activated
     * @return User
     */
    public function setActivated($activated) {
        $this->activated = $activated;

        return $this;
    }

    /**
     * Get activated
     *
     * @return boolean
     */
    public function getActivated() {
        return $this->activated;
    }

    /**
     * Set activation_key
     *
     * @param string $activationKey
     * @return User
     */
    public function setActivationKey($activationKey) {
        $this->activation_key = $activationKey;

        return $this;
    }

    /**
     * Get activation_key
     *
     * @return string
     */
    public function getActivationKey() {
        return $this->activation_key;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt) {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * Set role
     *
     * @param \EShop\CoreBundle\Entity\Role $role
     * @return User
     */
    public function setRole(\EShop\CoreBundle\Entity\Role $role = null) {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \EShop\CoreBundle\Entity\Role
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Set billing_adress
     *
     * @param \EShop\CoreBundle\Entity\Adress $billingAdress
     * @return User
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
     * @return User
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
}