<?php

$metodo = $_SERVER['REQUEST_METHOD'];

require_once("model/Curso/entidad/Curso.php");
require_once("controller/CursoController.php");
require_once("model/Curso/dao/DaoCurso.php");
$controller = new CursoController();

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
