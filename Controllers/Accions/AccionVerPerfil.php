<?php

require_once("../Controladores/UsuarioControlador.php");
require_once("../../Models/Entidad/Usuario.php");
session_start();
if(!isset($_SESSION["usuario"])){
 header("Location:../../index.html");
}

$usuario= UsuarioControlador::getUsuario($_SESSION["usuario"]);
           //echo(" <h2>Nombre:".$usuario->getNombre()."</h2>");
           echo($usuario->getUserName());
           // echo(" <h2>Username:".$usuario->getUserName()."</h2>");
            //echo(" <h2>Email:".$usuario->getEmail()."</h2>");
            //echo(" <h2>Tipo Usuario:".$usuario->getTipoUsuario()."</h2>");

           

?>