<?php
// esta pagina recibe los datos de logincontrol esta contiene todas las funcioneS
// que se realizan en UsuarioDao

require(__DIR__."/../../Models/Dao/UsuarioDao.php");

class UsuarioControlador{
    function Login($user,$pass){
       $userObject= new Usuario();
       $userObject->setUsername($user);
       $userObject->setClave($pass);
       return UsuarioDao::Login($userObject);
    }
    function InsertarUsuario($user,$pass,$clave,$email){
      $userObject= new Usuario();
      $userObject->setUsername($user);
      $userObject->setClave($pass);
      $userObject->setNombre($clave);
      $userObject->setEmail($email);
      $userObject->setTipoUsuario("usuario_regular");
      return UsuarioDao::InsertarUsuario($userObject);
    }
    function getUsuarios(){
      return UsuarioDao::getUsuarios();
    }

}




?>