<?php
// src/EtpWeb/CoreBundle/Entity/Agence.php
namespace EtpWeb\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtpWeb\UserBundle\Entity\User
 *
 * @ORM\Table(name="EtpWeb_agences")
 * @ORM\Entity(repositoryClass="EtpWeb\CoreBundle\Entity\AgenceRepository")
 */
class Agence 
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;
    

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
     * Set name
     *
     * @param string $name
     * @return Agence
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
     * Set email
     *
     * @param string $email
     * @return Agence
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
