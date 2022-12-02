<?php

class Profesor
{
  private $prof_id;
  private $depto_id;
  private $nombre;
  private $direccion;
  private $telefono;

  

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
}