<?php

require_once("model/Profesor/entidad/Profesor.php");
require_once("model/Profesor/dao/DaoProfesor.php");
require_once("model/Depto/dao/DaoDepto.php");

class ProfesorController
{

    public $profesor;
    function __construct()
    {
    }
    public function registrar()
    {

        if ($_POST["txtNombre"]) {
            $profesor = new Profesor();
            $profesor->setDepto_id($_POST["txtDepartamento"]);
            $profesor->setNombre($_POST["txtNombre"]);
            $profesor->setDireccion($_POST["txtDireccion"]);
            $profesor->setTelefono($_POST["txtTelefono"]);

            $daoProfesor = new DaoProfesor();
            $daoProfesor->Insert($profesor);
            echo json_encode('Registro completado');
        } else {
            echo json_encode('error');
        }
    }

    public function eliminar()
    {

        if (isset($_GET["id"])) {

            $daoProfesor = new DaoProfesor();
            $daoProfesor->Delete($_GET["id"]);
            echo json_encode('Eliminado correctamente');
        } else {
            echo json_encode('error');
        }
    }

    public function editar()
    {
        parse_str(file_get_contents(filename: 'php://input'), result: $_POST);
        if (isset($_GET["id"]) && isset($_POST["txtNombre"])) {
            if ($_GET["id"] > 0) {
                $profesor = new Profesor();
                $profesor->setProf_id($_GET["id"]);
                $profesor->setDepto_id($_POST["txtDepartamento"]);
                $profesor->setNombre($_POST["txtNombre"]);
                $profesor->setDireccion($_POST["txtDireccion"]);
                $profesor->setTelefono($_POST["txtTelefono"]);

                $daoProfesor = new DaoProfesor();
                $daoProfesor->Update($profesor);
                echo json_encode('Actualizado correctamente');
            }
        } else {
            echo json_encode('errorxd');
        }
    }

    public function listar()
    {
        $daoProfesor = new DaoProfesor();
        $daoDepto = new DaoDepto();
        if(isset($_GET['id']))
        {
            $rst = $daoProfesor->Select($_GET['id']);
        }else{
            $rst = $daoProfesor->Select();
        }

        echo json_encode($rst);
    }
}
