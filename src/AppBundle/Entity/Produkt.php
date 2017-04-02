<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produkt
 *
 * @ORM\Table(name="produkt")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProduktRepository")
 */
class Produkt
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
     * @ORM\Column(name="jmeno", type="string", length=255)
     */
    private $jmeno;

    /**
     * @var int
     *
     * @ORM\Column(name="cena", type="integer")
     */
    private $cena;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set jmeno
     *
     * @param string $jmeno
     *
     * @return Produkt
     */
    public function setJmeno($jmeno)
    {
        $this->jmeno = $jmeno;

        return $this;
    }

    /**
     * Get jmeno
     *
     * @return string
     */
    public function getJmeno()
    {
        return $this->jmeno;
    }

    /**
     * Set cena
     *
     * @param integer $cena
     *
     * @return Produkt
     */
    public function setCena($cena)
    {
        if($cena < 0){
            $cena = 50;
        }
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena
     *
     * @return int
     */
    public function getCena()
    {
        return $this->cena;
    }
}

