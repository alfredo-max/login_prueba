<?php

require_once('../modelo/conexion.php');
require_once('../modelo/modelo_usuario.php');

  
     $user_autentificado=new modelo_usuario();     
     $user_autentificado->autentificar_usuario("juan","123");

 
  
?>