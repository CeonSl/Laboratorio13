<?php

require_once("model/Depto/entidad/depto.php");
require_once("model/Depto/dao/DaoDepto.php");
class DeptoController
{

    public $depto;
    function __construct()
    {
    }
    public function registrar()
    {
        if ($_POST["txtNombre"]) {
            $depto = new depto();
            $depto->setNombre($_POST["txtNombre"]);
            $depto->setDirector($_POST["txtDirector"]);
            $depto->setDescripcion($_POST["txtDescripcion"]);

            $daoDepto = new DaoDepto();
            $daoDepto->Insert($depto);
            echo json_encode('Registro completado');
        } else {
            echo json_encode('error');
        }
    }

    public function eliminar()
    {
        if (isset($_GET["id"])) {

            $daoDepto = new DaoDepto();
            $daoDepto->Delete($_GET["id"]);
            echo json_encode('Eliminado correctamente');
        }else{
            echo json_encode('error');
        }
    }

    public function editar()
    {
        parse_str(file_get_contents(filename: 'php://input'), result: $_POST);
        if (isset($_GET["id"])  && isset($_POST['txtNombre'])) {

            $depto = new depto();
            $depto->setDepto_id($_GET["id"]);
            $depto->setNombre($_POST["txtNombre"]);
            $depto->setDirector($_POST["txtDirector"]);
            $depto->setDescripcion($_POST["txtDescripcion"]);

            $daoDepto = new DaoDepto();
            $daoDepto->Update($depto);
            echo json_encode('Actualizado correctamente');
        } else {
            echo json_encode('errorxd');
        }
    }

    public function listar()
    {
        $daoDepto = new DaoDepto();
        if(isset($_GET['id']))
        {
            $rst = $daoDepto->Select($_GET['id']);
        }else{
            $rst = $daoDepto->Select();
        }

        echo json_encode($rst);
    }
}
