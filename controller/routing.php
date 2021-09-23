<?php 

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';

switch($var_getMenu){
    case "inicio":
        require_once('./views/home.php');
    break;
    case "recomendaciones":
        require_once('./views/recomendaciones.php');
    break;
    case "acercaDe":
        require_once('./views/acercaDe.php');
    break;
    case "contacto":
        require_once('./views/contacto.php');
    break;
    case "login":
        require_once('./views/login.php');
    break;
    case "registro":
        require_once('./views/registro.php');
    break;
    case "alumnos":
        include_once './model/alumnos.php';
        $sqlAlumnos = alumnos::consultar();    
        include_once './views/viewalumnos.php';
    break;
  



    default:
        require_once('./views/home.php');
}

?>