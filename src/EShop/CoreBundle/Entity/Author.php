<?php
/**
 * Created by PhpStorm.
 * User: casvanmarcel
 * Date: 10/25/13
 * Time: 6:31 PM
 */

namespace EShop\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="authors")
 */
class Author {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $author_name;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set author_name
     *
     * @param string $authorName
     * @return Author
     */
    public function setAuthorName($authorName) {
        $this->author_name = $authorName;

        return $this;
    }

    /**
     * Get author_name
     *
     * @return string
     */
    public function getAuthorName() {
        return $this->author_name;
    }
}