<?php

require_once("UsuarioControlador.php");
$username=$_POST["username"];
$clave=$_POST["clave"];
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$tipo_usuario=$_POST["tipo_usuario"];

if( !empty($username) && !empty($clave) && !empty($nombre) && !empty($correo)){

    $userInsertado=InsertarUsuariomd($username,$clave,$nombre,$correo);
   // si se inserto correctamente
   if($userInsertado!=null){
       echo($userInsertado->getTipoUsuario());
       session_start();
       $_SESSION["usuario"]=$username;
        header("Location:../../View/HomeUsuarioRegular.php");
    }else{
       echo("el usuario  ya hiciste");
       echo "<a href='../../View/Signup.php'>volver a registrar</a>";
    }
}

?>