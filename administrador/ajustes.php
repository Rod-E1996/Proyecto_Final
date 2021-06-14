<?php
    include ("../conexion.php");
    session_start(); //Reanudando la sesión iniciada
    error_reporting(0); //Quitar errores cuando se finaliza la sesión
    $varsesion=$_SESSION['usuario'];
    $tipo=$_SESSION['tipo'];
    if ($varsesion==null || $varsesion==""){
        header("Location:../index.php"); //Enviar al login si no existe una sesión previamente creada
        die();
    }
    if ($tipo!=1){
        header("Location:../logout.php"); //Cerrar la sesión si trata de cambiarse de usuario
    }
?>