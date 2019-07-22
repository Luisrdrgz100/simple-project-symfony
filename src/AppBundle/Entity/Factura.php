<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacturaRepository")
 */
class Factura
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
     * @ORM\Column(name="fecha", type="string", length=255)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="string", length=255)
     */
    private $importe;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cliente", type="integer")
     */
    private $id_cliente;


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
     * Set fecha
     *
     * @param string $fecha
     *
     * @return Factura
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set importe
     *
     * @param string $importe
     *
     * @return Factura
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set id_cliente
     *
     * @param integer $id_cliente
     *
     * @return Factura
     */
    public function setid_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;

        return $this;
    }

    /**
     * Get id_cliente
     *
     * @return int
     */
    public function getid_cliente()
    {
        return $this->id_cliente;
    }
}

