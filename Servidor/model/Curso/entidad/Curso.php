<?php

class Curso{

    private $curso_id;
    private $prof_id;
    private $nombre;
    private $nivel;
    private $descripcion;

    


    /**
     * Get the value of curso_id
     */ 
    public function getCurso_id()
    {
        return $this->curso_id;
    }

    /**
     * Set the value of curso_id
     *
     * @return  self
     */ 
    public function setCurso_id($curso_id)
    {
        $this->curso_id = $curso_id;

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
     * Get the value of nivel
     */ 
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */ 
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

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

    /**
     * Get the value of prof_id
     */ 
    public function getProf_id()
    {
        return $this->prof_id;
    }

    /**
     * Set the value of prof_id
     *
     * @return  self
     */ 
    public function setProf_id($prof_id)
    {
        $this->prof_id = $prof_id;

        return $this;
    }
}

?>