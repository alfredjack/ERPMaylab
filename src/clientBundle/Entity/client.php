<?php

namespace clientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="clientBundle\Repository\clientRepository")
 */
class client
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
     * @var string
     *
     * @ORM\Column(name="nomclient", type="string", length=255)
     */
    private $nomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="codeclient", type="string", length=255)
     */
    private $codeclient;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="text", nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=255, nullable=true)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="assujettiatva", type="string", length=255, nullable=true)
     */
    private $assujettiatva;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="formejuridique", type="string", length=255, nullable=true)
     */
    private $formejuridique;


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
     * Set nomclient
     *
     * @param string $nomclient
     * @return client
     */
    public function setNomclient($nomclient)
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    /**
     * Get nomclient
     *
     * @return string 
     */
    public function getNomclient()
    {
        return $this->nomclient;
    }

    /**
     * Set codeclient
     *
     * @param string $codeclient
     * @return client
     */
    public function setCodeclient($codeclient)
    {
        $this->codeclient = $codeclient;

        return $this;
    }

    /**
     * Get codeclient
     *
     * @return string 
     */
    public function getCodeclient()
    {
        return $this->codeclient;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return client
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return client
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

    /**
     * Set web
     *
     * @param string $web
     * @return client
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set assujettiatva
     *
     * @param string $assujettiatva
     * @return client
     */
    public function setAssujettiatva($assujettiatva)
    {
        $this->assujettiatva = $assujettiatva;

        return $this;
    }

    /**
     * Get assujettiatva
     *
     * @return string 
     */
    public function getAssujettiatva()
    {
        return $this->assujettiatva;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return client
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set formejuridique
     *
     * @param string $formejuridique
     * @return client
     */
    public function setFormejuridique($formejuridique)
    {
        $this->formejuridique = $formejuridique;

        return $this;
    }

    /**
     * Get formejuridique
     *
     * @return string 
     */
    public function getFormejuridique()
    {
        return $this->formejuridique;
    }
}
