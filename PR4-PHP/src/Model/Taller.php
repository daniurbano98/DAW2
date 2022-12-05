<?php 
namespace Model;
Class Taller{
    private $cif_taller;
    private $direccion;
    private $telefono;
    private $facturacion;
    private $fecha_facturacion;



    public function __construct($cif_taller,$direccion,$telefono,$facturacion,$fecha_facturacion)
    {
        $this->cif_taller= $cif_taller;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->facturacion = $facturacion;
        $this->fecha_facturacion = $fecha_facturacion; 
    }

    



    /**
     * Get the value of cif_taller
     */ 
    public function getCif_taller()
    {
        return $this->cif_taller;
    }

    /**
     * Set the value of cif_taller
     *
     * @return  self
     */ 
    public function setCif_taller($cif_taller)
    {
        $this->cif_taller = $cif_taller;

        return $this;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of facturacion
     */ 
    public function getFacturacion()
    {
        return $this->facturacion;
    }

    /**
     * Set the value of facturacion
     *
     * @return  self
     */ 
    public function setFacturacion($facturacion)
    {
        $this->facturacion = $facturacion;

        return $this;
    }

    /**
     * Get the value of fecha_facturacion
     */ 
    public function getFecha_facturacion()
    {
        return $this->fecha_facturacion;
    }

    /**
     * Set the value of fecha_facturacion
     *
     * @return  self
     */ 
    public function setFecha_facturacion($fecha_facturacion)
    {
        $this->fecha_facturacion = $fecha_facturacion;

        return $this;
    }
}





?>