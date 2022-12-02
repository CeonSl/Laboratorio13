<?php
include_once("model/Conexion.php");
class DaoDepto
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
      $sql = "SELECT * FROM depto WHERE depto_id=?;";
      $tabla = $this->base->prepare($sql);
      $tabla->bindParam(1, $id);
      $tabla->execute();
      $resultado = $tabla->fetch(PDO::FETCH_OBJ);
    } else {
      // Varios registros
      $sql = "SELECT * FROM depto ORDER BY depto_id;";
      $tabla = $this->base->query($sql);
      $tabla->execute();
      $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
    }
    return $resultado;
  }
  public function Insert($depto)
  {
    $sql = "INSERT INTO depto(nombre, director, descripcion) VALUES (?,?,?)";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $depto->getNombre());
    $tabla->bindValue(2, $depto->getDirector());
    $tabla->bindValue(3, $depto->getDescripcion());
    $tabla->execute();
  }

  public function Update($depto)
  {
    $sql = "UPDATE depto SET nombre=?, director=?, descripcion=? WHERE depto_id=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $depto->getNombre());
    $tabla->bindValue(2, $depto->getDirector());
    $tabla->bindValue(3, $depto->getDescripcion());
    $tabla->bindValue(4, $depto->getDepto_id());
    $tabla->execute();
  }
  public function Delete($id = 0)
  {
    $sql = "DELETE FROM depto WHERE depto_id=?;";
    $tabla = $this->base->prepare($sql);
    $tabla->bindValue(1, $id);
    $tabla->execute();
  }
}
