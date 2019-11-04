<?php
// aca validamos los datos(aun no lo he hecho) para luego mandarlo al controlador
require_once(__DIR__."/../Controladores/UsuarioControlador.php");
session_start();
if(!isset($_SESSION["usuarioEditar"])){
 header("Location:../../index.html");
}

// usuario original
$userRealObject= UsuarioControlador::getUsuario($_SESSION["usuarioEditar"]);



$user=htmlentities(addslashes($_POST["username"]));
$pass=htmlentities(addslashes($_POST["clave"]));
$nombre=htmlentities(addslashes($_POST["nombre"]));
$email=htmlentities(addslashes($_POST["correo"]));
$tipo_usuario=htmlentities(addslashes($_POST["tipo_usuario"]));

$band=UsuarioControlador::EditarUsuario($userRealObject,$user,$nombre,$pass,$email,$tipo_usuario);
 
if($band==true){
   // header("Location:../../View/crud/crud.php");
   echo $band;
}else{
    echo("no se actualizo");
}


?>

