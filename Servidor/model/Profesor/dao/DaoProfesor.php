<?php
include_once("model/Conexion.php");
class DaoProfesor
{
  public $base;
  public function __construct()
  {
    $this->base = Conexion::conectar();
  }

  public function Select($id = 0)
  {
    if ($id > 0) {
      // Un solo registro
      $sql = "SELECT * FROM profesor 
      WHERE prof_id=?";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $id);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT * FROM profesor
      ORDER BY prof_id";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }
  public function Insert($profesor)
  {
    $sql = "INSERT INTO profesor(depto_id, nombre, direccion, telefono) VALUES (?,?,?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $profesor->getDepto_id());
    $tabla->bindValue(2, $profesor->getNombre());
    $tabla->bindValue(3, $profesor->getDireccion());
    $tabla->bindValue(4, $profesor->getTelefono());
    $tabla->execute();
  }

  public function Update($profesor)
  {
    $sql = "UPDATE profesor SET depto_id=?, nombre=?, direccion=?, telefono=? WHERE prof_id=?";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $profesor->getDepto_id());
    $tabla->bindValue(2, $profesor->getNombre());
    $tabla->bindValue(3, $profesor->getDireccion());
    $tabla->bindValue(4, $profesor->getTelefono());
    $tabla->bindValue(5, $profesor->getProf_id());
    $tabla->execute();
  }
  public function Delete($id = 0)
  {
    $sql = "DELETE FROM profesor WHERE prof_id=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $id);
    $tabla->execute();
  }
}
