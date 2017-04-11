<?php
/**
 * Created by PhpStorm.
 * User: karoumii
 * Date: 11/04/2017
 * Time: 10:05
 */

namespace Omega\AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class DemandeDansEtat
 * @package Omega\AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="demande_se_trouve_dans_etat")
 */

class DemandeDansEtat
{

    /**
     * @var integer
     *
     * @ORM\Id
     *
     * @ORM\Column(name="id", type="integer", length=11)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="IdDemande", type="string" , length=11)
     */

    protected $idDemande;
    /**
     * @var string
     *
     * @ORM\Column(name="Code_etat", type="string", length=20)
     */
    protected $statut;

    /**
     * @var \DateTime
     *
     *
     * @ORM\Column(name="Date_entree", type="datetime", length=20)
     */
    protected $dateEntree;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdDemande()
    {
        return $this->idDemande;
    }

    /**
     * @param string $idDemande
     */
    public function setIdDemande($idDemande)
    {
        $this->idDemande = $idDemande;
    }

    /**
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param string $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }


    /**
     * @return \DateTime
     */
    public function getDateEntree()
    {
        return $this->dateEntree;
    }
    /**
     * @param \DateTime $dateEntree
     */
    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;
    }



}