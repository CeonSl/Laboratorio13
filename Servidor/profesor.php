<?php

$metodo = $_SERVER['REQUEST_METHOD'];

require_once("model/Profesor/entidad/Profesor.php");
require_once("controller/ProfesorController.php");
require_once("model/Profesor/dao/DaoProfesor.php");
$controller = new ProfesorController();

switch ($metodo) {
    case 'GET':
        $controller->listar();
        break;
    case 'POST':
        $controller->registrar();
        break;
    case 'PUT':
        $controller->editar();
        break;
    case 'DELETE':
        $controller->eliminar();
        break;
    default:
        header('HTTP/1.1 405 Metodo no permitido');
        header('Permitido: GET, PUT, DELETE, POST');
        break;
}
