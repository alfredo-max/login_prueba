<?php

require_once(__DIR__."/../Controladores/UsuarioControlador.php");
require_once("../../Models/Entidad/Usuario.php");
session_start();
if(!isset($_SESSION["usuario"])){
 header("Location:../../index.html");
}

$usuario= UsuarioControlador::getUsuario($_SESSION["usuario"]);
                 
                  echo("Nombre: ".$usuario->getNombre()."<br>");
                  echo("UserName: ".$usuario->getUserName()."<br>");
                  echo("Email: ".$usuario->getEmail()."<br>");
                  echo("TipoUsuario: ".$usuario->getTipoUsuario()."<br>");


?>