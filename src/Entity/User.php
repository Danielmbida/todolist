<?php

namespace todolist\Entity;
use Doctrine\ORM\Mapping as ORM;
Use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User{
    /**
     * @ORM\id
     * @ORM\GeneratedValue
     *@ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string")
     */
    protected $lastname;

    /**
     * @ORM\oneToMany(targetEntity=Task::class, cascade={"persist", "remove"}, mappedBy="user")
     */
    protected $task;

    public function __toString()
    {
        $str = "<pre>USER";
        $str .= "\nid : ".$this->id;
        $str .= "\nNom: ".$this->firstname."\n";
        $str .= "\nPrenom : ".$this->lastname."\n";
        $str .= "</pre>";
        return $str;
    }
//
//    public function __construct()
//    {
//        $this->task = new ArrayCollection();
//    }
//
//    public function addTask(Task $task)
//    {
//        $this->task->add($task);
//        $task->setUser($this);
//    }


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
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param mixed $task
     */
    public function setTask($task)
    {
        $this->task = $task;
    }

}