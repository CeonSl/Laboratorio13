<?php

require_once("model/Curso/entidad/Curso.php");
require_once("model/Curso/dao/DaoCurso.php");
require_once("model/Profesor/dao/DaoProfesor.php");
class CursoController
{

    public $curso;
    function __construct()
    {
    }
    public function registrar()
    {

        if ($_POST["txtNombre"]) {
            $curso = new curso();
            $curso->setNombre($_POST["txtNombre"]);
            $curso->setProf_id($_POST["txtProfesor"]);
            $curso->setNivel($_POST["txtNivel"]);
            $curso->setDescripcion($_POST["txtDescripcion"]);

            $daoCurso = new DaoCurso();
            $daoCurso->Insert($curso);
            echo json_encode('Registro completado');
        } else {
            echo json_encode('error');
        }
    }

    public function eliminar()
    {

        
        if ($_GET["id"]) {

            $daoCurso = new DaoCurso();
            $daoCurso->Delete($_GET["id"]);
            echo json_encode('Eliminado correctamente');
        }else{
            echo json_encode('error');
        }
    }

    public function editar()
    {
        parse_str(file_get_contents(filename: 'php://input'), result: $_POST);
        if (isset($_GET["id"]) && isset($_POST["txtNombre"])) {
            
            $curso = new curso();
            $curso->setCurso_id($_GET["id"]);
            $curso->setNombre($_POST["txtNombre"]);
            $curso->setProf_id($_POST["txtProfesor"]);
            $curso->setNivel($_POST["txtNivel"]);
            $curso->setDescripcion($_POST["txtDescripcion"]);

            $daoCurso = new DaoCurso();
            $daoCurso->Update($curso);
            echo json_encode('Actualizado correctamente');
        } else {
            echo json_encode('errorxd');
        }
    }

    public function listar()
    {
        $daoCurso = new DaoCurso();
        $daoProfesor = new DaoProfesor();
        if(isset($_GET['id']))
        {
            $rst = $daoCurso->Select($_GET['id']);

        }else{
            $rst = $daoCurso->Select();

        }

        echo json_encode($rst);
    }
}
