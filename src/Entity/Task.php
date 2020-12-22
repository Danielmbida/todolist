<?php
namespace todolist\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tasks")
 */

class Task{
    /**
     * @ORM\id
     * @ORM\GeneratedValue
     *@ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date_to;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date_from;

    /**
     * @ORM\Column(type="string")
     */
    protected $tache;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="task")
     */
    protected $user;

//    public function __construct()
//    {
//        $this->user = new ArrayCollection();
//    }

    public function __toString()
    {
        $str = "<pre>" ;
        echo "Detail de la tâche";
//        $str .= "\nid : ".$this->id;
        $str .= "\nNom de la Tache : ".$this->tache. "\n";
        $str .= "\ndate de début : ".$this->date_to->format(\Datetime::ISO8601)."\n";
        $str .= "\ndate de fin : ".$this->date_from->format(\Datetime::ISO8601)."\n";
        $str .= "\nCréer par : ".$this->user->getFirstname(). " " . $this->user->getLastname() . "\n";
        $str .= "</pre>";
        return $str;
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
    public function getDateTo()
    {
        return $this->date_to;
    }

    /**
     * @param mixed $date_to
     */
    public function setDateTo($date_to)
    {
        $this->date_to = $date_to;
    }

    /**
     * @return mixed
     */
    public function getDateFrom()
    {
        return $this->date_from;
    }

    /**
     * @param mixed $date_from
     */
    public function setDateFrom($date_from)
    {
        $this->date_from = $date_from;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * @param mixed $tache
     */
    public function setTache($tache)
    {
        $this->tache = $tache;
    }



}