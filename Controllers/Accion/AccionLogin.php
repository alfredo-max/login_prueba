<?php

// require_once('../modelo/conexion.php');
// require_once('../modelo/modelo_usuario.php');
require('../mdb/mdbUsuario.php');
     
     
     $username=htmlentities(addslashes($_POST["username"]));
     $password=htmlentities(addslashes($_POST["clave"]));

     if(!empty($username) && !empty($password)){
        $user=AutentificarUsuariomd($username,$password);
        
        if($user==false){
             echo("no esta registrado");
        }else{
          session_start();
          $_SESSION["usuario"]=$_POST["username"];
          header("location:../../View/Home.php");
        }



     }else{
          echo("hay un dato vacio");
     }
     
     // 
 
  
?>