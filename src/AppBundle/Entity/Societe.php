<?php
/**
 * Created by PhpStorm.
 * User: remig
 * Date: 01/03/2018
 * Time: 10:44
 */

namespace AppBundle\Entity;
// src/AppBundle/Entity/Societe.php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Societe")
 */
class Societe
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $nom;

    /**
     * Societe constructor.
     * @param $id
     * @param $nom
     */
    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="Societe")
     */
    private $users;

    /**
     * @return mixed
     */

    public function __construct($id, $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->users = new ArrayCollection();
    }

    /**
     * @return mixed
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Role constructor.
     * @param $id
     * @param $nom
     */

}