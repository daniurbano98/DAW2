<?php 
namespace app;
class Character{
    private $id;
    private $name;
    private $originPlanet;
    private $role;
    private $specie;
    private $status;
    private $transform;
    private $universe;

    
    public function __construct($id,$name,$originPlanet,$role,$specie,$status,$transform,$universe)
    {
        $this->id = $id;
        $this->id = $id;
        $this->id = $id;
        $this->id = $id;
        $this->id = $id;

    }
    /**
     * Get the value of universe
     */ 
    public function getUniverse()
    {
        return $this->universe;
    }

    /**
     * Set the value of universe
     *
     * @return  self
     */ 
    public function setUniverse($universe)
    {
        $this->universe = $universe;

        return $this;
    }

    /**
     * Get the value of transform
     */ 
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Set the value of transform
     *
     * @return  self
     */ 
    public function setTransform($transform)
    {
        $this->transform = $transform;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of specie
     */ 
    public function getSpecie()
    {
        return $this->specie;
    }

    /**
     * Set the value of specie
     *
     * @return  self
     */ 
    public function setSpecie($specie)
    {
        $this->specie = $specie;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of originPlanet
     */ 
    public function getOriginPlanet()
    {
        return $this->originPlanet;
    }

    /**
     * Set the value of originPlanet
     *
     * @return  self
     */ 
    public function setOriginPlanet($originPlanet)
    {
        $this->originPlanet = $originPlanet;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}



?>