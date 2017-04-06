<?php
/**
 * Created by PhpStorm.
 * User: karoumii
 * Date: 04/04/2017
 * Time: 11:53
 */

namespace Omega\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Test
 * @package Omega\AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="demande_ou_projet")
 */

class Demande
{
    /**
     * @var string
     *
     * @ORM\Column(name=IdClientDemande, type="string")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var char
     *
     * @ORM\Column(name="Type_demande", type="char")
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string")
     */
    protected $objet;



    // protected $statut;


    /**
     * @var char
     *
     * @ORM\Column(name="ref_ressource", type="char")
     */
    protected $responsable;
   // protected $application;


    /**
     * @var integer
     *
     * @ORM\Column(name="Priorite", type="integer")
     */
    protected $priority;

    /**
     * @var date
     *
     * @ORM\Column(name="Date_emission", type="date")
     */
    protected $dateDebut;

    /**
     * @var date
     *
     * @ORM\Column(name="Date_livraison_prevue", type="date")
     */
    protected $dateFin;

    /**
     * @var double
     *
     * @ORM\Column(name="charge_vendue", type="double")
     */
    protected $chargeTotal;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return char
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param char $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * @param string $objet
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    }

    /**
     * @return char
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * @param char $responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return date
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param date $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return date
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param date $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return float
     */
    public function getChargeTotal()
    {
        return $this->chargeTotal;
    }

    /**
     * @param float $chargeTotal
     */
    public function setChargeTotal($chargeTotal)
    {
        $this->chargeTotal = $chargeTotal;
    }


}