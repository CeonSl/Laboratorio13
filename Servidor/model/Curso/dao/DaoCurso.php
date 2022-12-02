<?php
include_once("model/Conexion.php");
class DaoCurso
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
            $sql = "SELECT * FROM curso WHERE curso_id=?;";
            $tabla = $this->base->prepare($sql);
            $tabla->bindParam(1, $id);
            $tabla->execute();
            $resultado = $tabla->fetch(PDO::FETCH_OBJ);
        } else {
            // Varios registros
            $sql = "SELECT * FROM curso ORDER BY curso_id;";
            $tabla = $this->base->query($sql);
            $tabla->execute();
            $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);
        }
        return $resultado;
    }
    public function Insert($curso)
    {
        $sql = "INSERT INTO curso(prof_id, nombre, nivel, descripcion) VALUES (?,?,?,?)";
        $tabla = $this->base->prepare($sql);
        $tabla->bindValue(1, $curso->getProf_id());
        $tabla->bindValue(2, $curso->getNombre());
        $tabla->bindValue(3, $curso->getNivel());
        $tabla->bindValue(4, $curso->getDescripcion());
        $tabla->execute();
    }

    public function Update($curso)
    {
        $sql = "UPDATE curso SET prof_id =?, nombre=?, nivel=?, descripcion=? WHERE curso_id=?";
        $tabla = $this->base->prepare($sql);
        $tabla->bindValue(1, $curso->getProf_id());
        $tabla->bindValue(2, $curso->getNombre());
        $tabla->bindValue(3, $curso->getNivel());
        $tabla->bindValue(4, $curso->getDescripcion());
        $tabla->bindValue(5, $curso->getCurso_id());
        $tabla->execute();
    }
    public function Delete($id = 0)
    {
        $sql = "DELETE FROM curso WHERE curso_id=?;";
        $tabla = $this->base->prepare($sql);
        $tabla->bindValue(1, $id);
        $tabla->execute();
    }
}
