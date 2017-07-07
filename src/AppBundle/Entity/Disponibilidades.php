<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilidades
 *
 * @ORM\Table(name="disponibilidades")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DisponibilidadesRepository")
 */
class Disponibilidades
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time")
     */
    private $hora;

    /**
     * @ORM\OneToMany(targetEntity="Agenda", mappedBy="disponibilidades")
     */

    private $disponibilidades;

    public function __construct()
    {
        $this->disponibilidades = new ArrayCollection();
    }


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
     * @param \DateTime $fecha
     *
     * @return Disponibilidades
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Disponibilidades
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Add disponibilidade
     *
     * @param \AppBundle\Entity\Agenda $disponibilidade
     *
     * @return Disponibilidades
     */
    public function addDisponibilidade(\AppBundle\Entity\Agenda $disponibilidade)
    {
        $this->disponibilidades[] = $disponibilidade;

        return $this;
    }

    /**
     * Remove disponibilidade
     *
     * @param \AppBundle\Entity\Agenda $disponibilidade
     */
    public function removeDisponibilidade(\AppBundle\Entity\Agenda $disponibilidade)
    {
        $this->disponibilidades->removeElement($disponibilidade);
    }

    /**
     * Get disponibilidades
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDisponibilidades()
    {
        return $this->disponibilidades;
    }
}
