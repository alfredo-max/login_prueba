<?php


require('../../Models/Dao/UsuarioDao.php');

function AutentificarUsuariomd($user,$password){
  $userFound=UsuarioDao::AautentificarUsuario($user,$password);
  return $userFound;
}
function InsertarUsuariomd($user,$password,$nombre,$correo){
   $userInsertado= UsuarioDao::InsertarUsuario($user,$password,$nombre,$correo);
   return $userInsertado;
}




?>