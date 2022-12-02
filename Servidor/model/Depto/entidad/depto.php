<?php
class depto {

    private $depto_id;
    private $nombre;
    private $director;
    private $descripcion;
    
    

    /**
     * Get the value of depto_id
     */ 
    public function getDepto_id()
    {
        return $this->depto_id;
    }

    /**
     * Set the value of depto_id
     *
     * @return  self
     */ 
    public function setDepto_id($depto_id)
    {
        $this->depto_id = $depto_id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of director
     */ 
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set the value of director
     *
     * @return  self
     */ 
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}

?>