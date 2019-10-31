<?php

   include_once("Conexion.php");
   //include_once("..\entidades\Jugador.php");

   class UsuarioDao {
    
      // public function __construct($user,$password)
      // {
      //    //$cnx=Conexion::Conectar();
      //    $this->$user=$user;
      //    $this->$password=$password;
      // }
      
      public static function AautentificarUsuario($user,$password){
      //   //  $username=$Jugador->getUsername();
          $cnx=Conexion::Conectar();
          $sql="SELECT usuario,clave FROM jugador WHERE USUARIO = :username AND CLAVE= :clave";    
          $resultado= $cnx->prepare($sql); 
          $resultado->bindValue(":username",$user);
          $resultado->bindValue(":clave",$password);
          $resultado->execute();
          $numeroDeRegistro=$resultado->rowCount();
          if($numeroDeRegistro!=0){
             return true;
             $cnx=null;

          }else{
             return false;
          }

      }

      public static function InsertarUsuario($user,$password,$nombre,$correo){
         $cnx=Conexion::Conectar();
         $sql="INSERT INTO usuario(usuario,clave,email,nombre) Values ('$user','$password','$nombre','$correo')";
         $resultado=$cnx->prepare($sql);
          $resultado->execute();
        return true;
         
         // // verifico si ya hiciste este usuario
         // $verificarUsuario= "SELECT usuario FROM Usuario WHERE usuario='$user'";
         // $resultado= $cnx->prepare($verificarUsuario);
         // // si ya hiciste
         // if($resultado->rowCount()>0){
         //     echo("el usuario ya hiciste");
         // }else{
         //    $resultado=$cnx->prepare($sql);
         //    return $resultado->execute();
         // }
         //  return false;
      }
    



   }





?>