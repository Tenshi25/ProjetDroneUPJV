<?php
/**
 * Created by PhpStorm.
 * User: remig
 * Date: 01/03/2018
 * Time: 10:11
 */
// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $prenom;
    /**
     * @ORM\Column(type="string", length=60)
     */
    private $mail;
    /**
     * @ORM\Column(type="string", length=80)
     */
    private $motDePasse;
    /**
     * @ORM\ManyToOne(targetEntity="Societe", inversedBy="User")
     * @ORM\JoinColumn(name="societe_id", referencedColumnName="id")
     */
    private $societe;
    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="User")
     * @ORM\JoinColumn(name="Role_id", referencedColumnName="id")
     */
    private $societes;






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
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * @param mixed $motDePasse
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }

}