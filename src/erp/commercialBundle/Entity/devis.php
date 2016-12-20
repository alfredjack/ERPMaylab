<?php

namespace erp\commercialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="erp\commercialBundle\Repository\devisRepository")
 */
class devis
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
     * @ORM\Column(name="num", type="string", length=255)
     */
    private $num;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="perivalideb", type="date", nullable=true)
     */
    private $perivalideb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="perivalifin", type="date", nullable=true)
     */
    private $perivalifin;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;


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
     * Set num
     *
     * @param string $num
     * @return devis
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return string 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return devis
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
     * Set perivalideb
     *
     * @param \DateTime $perivalideb
     * @return devis
     */
    public function setPerivalideb($perivalideb)
    {
        $this->perivalideb = $perivalideb;

        return $this;
    }

    /**
     * Get perivalideb
     *
     * @return \DateTime 
     */
    public function getPerivalideb()
    {
        return $this->perivalideb;
    }

    /**
     * Set perivalifin
     *
     * @param \DateTime $perivalifin
     * @return devis
     */
    public function setPerivalifin($perivalifin)
    {
        $this->perivalifin = $perivalifin;

        return $this;
    }

    /**
     * Get perivalifin
     *
     * @return \DateTime 
     */
    public function getPerivalifin()
    {
        return $this->perivalifin;
    }

    /**
     * Set ref
     *
     * @param string $ref
     * @return devis
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }
}
