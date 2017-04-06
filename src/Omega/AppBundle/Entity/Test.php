<?php
/**
 * Created by PhpStorm.
 * User: AchRaFoS
 * Date: 02/12/2016
 * Time: 15:53
 */
namespace Omega\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Test
 * @package Omega\AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="test")
 */

class Test {

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string")
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string")
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string")
     */
    protected $age;

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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

}