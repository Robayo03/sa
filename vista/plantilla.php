<?php


include_once "vista/modulos/cabecera.php";

if (isset($_GET["ruta"])) {

    include_once "vista/modulos/navbar.php";

    if ($_GET["ruta"]=="inicioAdmin"||
        $_GET["ruta"]=="inicioCliente"||
        $_GET["ruta"]=="cerrar"||
        $_GET["ruta"]=="inicioEmpleado") {
            
        include_once "vista/modulos/".$_GET["ruta"].".php";
    }
} else {
    include_once "vista/modulos/login.php";
}

include_once "vista/modulos/pie.php";