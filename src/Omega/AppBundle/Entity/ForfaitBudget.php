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
 * Class ForfaitBudget
 * @package Omega\AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="forfait_budget")
 */
class ForfaitBudget
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="ID_FORFAIT_BUDGET", type="integer", length=20)
     */
    protected $ID_FORFAIT_BUDGET;
    /**
     * @var string
     *
     * @ORM\Column(name="CODE_FORFAIT_BUDGET", type="string" , length=30)
     */
    protected $codeForfaitBudget;
    //Getters and Setters
    /**
     * @return int
     */
    public function getIDFORFAITBUDGET()
    {
        return $this->ID_FORFAIT_BUDGET;
    }
    /**
     * @param int $ID_FORFAIT_BUDGET
     */
    public function setIDFORFAITBUDGET($ID_FORFAIT_BUDGET)
    {
        $this->ID_FORFAIT_BUDGET = $ID_FORFAIT_BUDGET;
    }
    /**
     * @return string
     */
    public function getCodeForfaitBudget()
    {
        return $this->codeForfaitBudget;
    }
    /**
     * @param string $codeForfaitBudget
     */
    public function setCodeForfaitBudget($codeForfaitBudget)
    {
        $this->codeForfaitBudget = $codeForfaitBudget;
    }
}