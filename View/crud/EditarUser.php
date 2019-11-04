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

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/solid.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/all.css">

    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a href="../HomeUsuarioAdmin.php" class="nav-link">Inicio</a>
            </li>
        </ul>
        <?php
        session_start();
            echo '
                <ul class="nav navbar-nav ml-auto">
                    <li>
                        <a href="../../Controllers/Accions/AccionVerPerfil.php" class="nav-link active">';echo $_SESSION["usuario"];echo '</a>
                    </li>
                    <li>
                        <a href="../../Controllers/Accions/AccionLogOut.php" class="nav-link">Cerrar sesión</a>
                    </li>
                </ul>
                ';
            ?>
   </nav>

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

