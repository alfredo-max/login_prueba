<?php
// esta pagina recibe los datos de logincontrol esta contiene todas las funcioneS
// que se realizan en UsuarioDao

require(__DIR__."/../../Models/Dao/UsuarioDao.php");

class UsuarioControlador{
  public static function Login($user,$pass){
       $userObject= new Usuario();
       $userObject->setUsername($user);
       $userObject->setClave($pass);
       return UsuarioDao::Login($userObject);
    }
    public static function InsertarUsuario($user,$pass,$clave,$email,$tipoUsuario){
      $userObject= new Usuario();
      $userObject->setUsername($user);
      $userObject->setClave($pass);
      $userObject->setNombre($clave);
      $userObject->setEmail($email);
      $userObject->setTipoUsuario($tipoUsuario);
      return UsuarioDao::InsertarUsuario($userObject);
    }
    public static function getUsuario($user){
      $userObject= new Usuario();
      $userObject->setUserName($user);

      $fila= UsuarioDao::getUsuario($userObject);

      $userObject->setClave($fila["clave"]);
      $userObject->setNombre($fila["nombre"]);
      $userObject->setEmail($fila["email"]);
      $userObject->setTipoUsuario($fila["tipo_usuario"]);

      return $userObject;

    }
    public static function getUsuarios(){
      return UsuarioDao::getUsuarios();
    }
    

}




?>