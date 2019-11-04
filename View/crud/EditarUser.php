<?php
session_start();
require_once("../../Controllers/Controladores/UsuarioControlador.php");
$usuario= UsuarioControlador::getUsuario($_GET["username"]);
$_SESSION["usuarioEditar"]=$usuario->getUserName();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    
         <form action="../../Controllers/Accions/AccionEditUser.php" method='POST'>
         <input type="text"  name="nombre"  value="<?php echo $usuario->getNombre()?>" >                                   
         <input type="text"  name="username" value="<?php echo  $usuario->getUserName()?>" >         
         <input type="email"  name="email"  value="<?php echo $usuario->getEmail()?>" >
         <input type="text"  name="tipo_usuario" value="<?php echo $usuario->getTipoUsuario()?>" >
         <input type="password"  name="clave" value="<?php echo $usuario->getClave()?>" >         
         <input type="submit" value="Actualizar">
         <a href="UserNew.php">Crear otro usuario</a>
    
        </form>
     
     
     
</body>
</html> 

