<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario
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
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="A_Paterno", type="string", length=255)
     */
    private $aPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="A_Materno", type="string", length=255)
     */
    private $aMaterno;

    /**
     * @var int
     *
     * @ORM\Column(name="Edad", type="integer")
     */
    private $edad;

     /**
     * @ORM\OneToMany(targetEntity="Direccion", mappedBy="Usuario")
     */
    private $direccion;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set aPaterno
     *
     * @param string $aPaterno
     *
     * @return Usuario
     */
    public function setAPaterno($aPaterno)
    {
        $this->aPaterno = $aPaterno;

        return $this;
    }

    /**
     * Get aPaterno
     *
     * @return string
     */
    public function getAPaterno()
    {
        return $this->aPaterno;
    }

    /**
     * Set aMaterno
     *
     * @param string $aMaterno
     *
     * @return Usuario
     */
    public function setAMaterno($aMaterno)
    {
        $this->aMaterno = $aMaterno;

        return $this;
    }

    /**
     * Get aMaterno
     *
     * @return string
     */
    public function getAMaterno()
    {
        return $this->aMaterno;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Usuario
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->direccion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add direccion
     *
     * @param \AppBundle\Entity\Direccion $direccion
     *
     * @return Usuario
     */
    public function addDireccion(\AppBundle\Entity\Direccion $direccion)
    {
        $this->direccion[] = $direccion;

        return $this;
    }

    /**
     * Remove direccion
     *
     * @param \AppBundle\Entity\Direccion $direccion
     */
    public function removeDireccion(\AppBundle\Entity\Direccion $direccion)
    {
        $this->direccion->removeElement($direccion);
    }

    /**
     * Get direccion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    public function __toString(){
        return $this->nombre;
    }
}
