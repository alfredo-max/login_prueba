<?php

require_once("../mdb/mdbUsuario.php");

$username=$_POST["usuario"];
$clave=$_POST["clave"];
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];

if( !empty($username) && !empty($clave) && !empty($nombre) && !empty($correo)){

     $userInsertado=InsertarUsuariomd($username,$clave,$nombre,$correo);
    
     if($userInsertado==false){
        echo("hola");
     }else{
         echo("perro");
     }
}



?>