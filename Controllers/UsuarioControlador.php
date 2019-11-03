<?php

require(__DIR__."/../Models/Dao/UsuarioDao.php");
function getUsuarios(){
  return UsuarioDao::getUsuarios();
}

?>