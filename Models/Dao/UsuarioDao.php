
<?php
require("Conexion.php");
 require (__DIR__."/../Entidad/Usuario.php");
    
   class UsuarioDao {
     
      public static function AautentificarUsuario($user,$password){
          $cnx=Conexion::Conectar();
          $sql="SELECT * FROM usuario WHERE username = :username AND CLAVE= :clave";    
          $resultado= $cnx->prepare($sql); 
          $resultado->bindValue(":username",$user);
          $resultado->bindValue(":clave",$password);
          $resultado->execute();
          $numeroDeRegistro=$resultado->rowCount();
          if($numeroDeRegistro!=0){
             
             $filas=$resultado->fetch();
             $usuario= new Usuario($filas["username"],$filas["clave"],$filas["email"],$filas["nombre"],$filas["tipo_usuario"]);
             return $usuario;
            
          }else{
             return null;
          }

      }

      public static function InsertarUsuario($user,$password,$nombre,$correo){
         $cnx=Conexion::Conectar();         // // verifico si ya hiciste este usuario
         $verificarUsuario= "SELECT username FROM USUARIO WHERE username='$user'";
         $resultado= $cnx->prepare($verificarUsuario);
         $resultado->bindValue(":user",$user);
         $resultado->execute();
         // si ya hiciste
         if($resultado->rowCount()>0){             
             return false;
         }else{
        
            $sql="INSERT INTO usuario(username,clave,email,nombre,tipo_usuario) Values ('$user','$password','$nombre','$correo','usuarioregular')";  
            $resultado=$cnx->prepare($sql);          
            return $resultado->execute();

         }
          
      }

      public static function getUsuarios(){
         $cnx= Conexion::Conectar();
         $sql= "SELECT  username,email,nombre,tipo_usuario FROM usuario";
         $resultado= $cnx->prepare($sql);
         $resultado->execute();
         $filas= $resultado->fetchAll();
         return $filas;         
      }
    
   }





?>