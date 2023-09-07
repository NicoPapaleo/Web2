<?php
require_once 'noticias.php';
require_once 'about.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//el router va a leer la accion desde el parametro action

$action = 'home'; //accion por defecto si no obtiene nada por URL
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

//parsea la accion 
$params = explode('/', $action);


switch ($params[0]){
    case 'home':
        showNoticias();
        break;
    case 'noticia':
        showNoticiasById($params[1]);
        break;
    case 'about':
        if(!empty($params[1]))
            showAbout($params[1]);
        else
            showAbout();
        break;
    default:
        show404();
        break;
}