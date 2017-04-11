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
 * Class DemandeSeTrouveDansEtat
 * @package Omega\AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="demande_se_trouve_dans_etat")
 */

class DemandeSeTrouveDansEtat
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=20)
     */
    protected $id;

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
     * @var integer
     *
     *
     * @ORM\Column(name="IdDemande", type="integer", length=20)
     */
    protected $idDemande;

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

    /**
     * @var \DateTime
     *
     *
     * @ORM\Column(name="Date_entree", type="datetime", length=20)
     */
    protected $dateEntree;

    /**
     * @var string
     *
     * @ORM\Column(name="Code_etat", type="string" , length=30)
     */
    protected $codeEtat;

    /**
     * @return int
     */
    public function getIdDemande()
    {
        return $this->idDemande;
    }

    /**
     * @param int $idDemande
     */
    public function setIdDemande($idDemande)
    {
        $this->idDemande = $idDemande;
    }

    /**
     * @return string
     */
    public function getCodeEtat()
    {
        return $this->codeEtat;
    }

    /**
     * @param string $codeEtat
     */
    public function setCodeEtat($codeEtat)
    {
        $this->codeEtat = $codeEtat;
    }

}