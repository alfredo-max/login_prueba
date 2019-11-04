<?php

require_once(__DIR__."/../Controladores/UsuarioControlador.php");
require_once("../../Models/Entidad/Usuario.php");

session_start();
if(!isset($_SESSION["usuario"])){
 header("Location:../../index.html");
}

$usuario= UsuarioControlador::getUsuario($_SESSION["usuario"]);


                 
                //   echo("Nuevo Nombre: ".$usuario->getNombre()."<br>");
                //   echo("Nuevo UserName: ".$usuario->getUserName()."<br>");
                //   echo("Nuevo Email: ".$usuario->getEmail()."<br>");
                //   echo("Nuevo TipoUsuario: ".$usuario->getTipoUsuario()."<br>");

?>

