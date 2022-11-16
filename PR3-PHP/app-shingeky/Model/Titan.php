<?php 
namespace CurlShingeky;
class Titan{
    private $id;
    private $name;
    private $description;
    private $characted_id;
    private $height_m;
    private $created_at;
    private $updated_at;
    private $picture_url;
    private $shifter;

    
    public function __construct($id,$name,$description,$character_id,$height_m,$created_at,$updated_at,$picture_url,$shifter)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->character_id = $character_id;
        $this->height_m = $height_m;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->picture_url = $picture_url;
        $this->shifter = $shifter;

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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of characted_id
     */ 
    public function getCharacted_id()
    {
        return $this->characted_id;
    }

    /**
     * Set the value of characted_id
     *
     * @return  self
     */ 
    public function setCharacted_id($characted_id)
    {
        $this->characted_id = $characted_id;

        return $this;
    }

    /**
     * Get the value of height_m
     */ 
    public function getHeight_m()
    {
        return $this->height_m;
    }

    /**
     * Set the value of height_m
     *
     * @return  self
     */ 
    public function setHeight_m($height_m)
    {
        $this->height_m = $height_m;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of picture_url
     */ 
    public function getPicture_url()
    {
        return $this->picture_url;
    }

    /**
     * Set the value of picture_url
     *
     * @return  self
     */ 
    public function setPicture_url($picture_url)
    {
        $this->picture_url = $picture_url;

        return $this;
    }

    /**
     * Get the value of shifter
     */ 
    public function getShifter()
    {
        return $this->shifter;
    }

    /**
     * Set the value of shifter
     *
     * @return  self
     */ 
    public function setShifter($shifter)
    {
        $this->shifter = $shifter;

        return $this;
    }
}









?>