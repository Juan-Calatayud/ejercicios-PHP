<?php
require 'config/autoload.php'; // Comprueba la ruta
use ejemplo\Bootstrap\Request;
use ejemplo\Bootstrap\Config;
use ejemplo\Bootstrap\Database;
use ejemplo\Bookstore\Controller\PageController;
use ejemplo\Bookstore\Controller\BookController;
$request = new Request();
// obtenemos el parámetro o asignamos un valor por defecto
$controller = $request->getParam('controller') ?? 'book';
// construimos el nombre completo del controlador
$controller = ucfirst($controller) . 'Controller';
$controller = 'ejemplo\\Bookstore\Controller\\'. $controller;
// obtenemos el parámetro o asignamos un valor por defecto
$action = $request->getParam('action') ?? 'index';
// intanciamos el controlador
$controller = new $controller;
// y llamamos a la "acción"/método pasando el id si lo hay
$controller->$action($request->getParam('id'));





$controlador = new BookController();
//$controlador->index();
//$controlador->delete(2);
//$controlador->update(1);