 
<?php
     require("../Models/Dao/UsuarioDao.php");
     $username=htmlentities(addslashes($_POST["username"]));
     $password=htmlentities(addslashes($_POST["clave"]));
    $userFound;
     if(!empty($username) && !empty($password)){
         $userFound= UsuarioDao::AautentificarUsuario($username,$password);
        
        if($userFound==null){
          echo("no registrado");
                  
        }else{
         session_start();          
          $_SESSION["usuario"]=array(
             "username"  => $userFound->getUsername(),
             "clave" => $userFound->getClave(),
             "email" => $userFound->getEmail(),
             "nombre"=> $userFound->getNombre(),
             "tipo_usuario"=>$userFound->getTipoUsuario(),

          );
 
           switch($userFound->getTipoUsuario()){
             case "usuario_regular":
               header("Location:../View/HomeUsuarioRegular.php");                 
             break;
             case "usuario_admin":
             header("Location:../View/HomeUsuarioAdmin.php");             
             break;
          }
       
       }


     }else{
          echo("hay un dato vacio");
     }
     echo ("a href='../View/Login.php'>Volver a ingresar</a>");
  ?>