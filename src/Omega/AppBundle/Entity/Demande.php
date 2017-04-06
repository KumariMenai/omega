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
     * @ORM\Id
     * @ORM\Column(name="IdDemande", type="string", length=11)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="IdClientDemande", type="string" , length=100)
     */
    protected $idClientDemande;


    /**
     * @var string
     *
     * @ORM\Column(name="Type_demande", type="string", length=3)
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
     * @var string
     *
     * @ORM\Column(name="ref_ressource", type="string")
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
     * @var \DateTime
     *
     * @ORM\Column(name="Date_emission", type="datetime")
     */
    protected $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_livraison_prevue", type="datetime")
     */
    protected $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="charge_vendue", type="float")
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
     * @return string
     */
    public function getIdClientDemande()
    {
        return $this->idClientDemande;
    }

    /**
     * @param string $idClientDemande
     */
    public function setIdClientDemande($idClientDemande)
    {
        $this->idClientDemande = $idClientDemande;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
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
     * @return string
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * @param string $responsable
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
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
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