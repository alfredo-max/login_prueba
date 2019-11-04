<?php

session_start();
// si no se ha iniciado seccion
if(!isset($_SESSION["usuario"])){
   header("Location:../index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/solid.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.css">

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a href="HomeUsuarioRegular.php" class="nav-link">Inicio</a>
            </li>
        </ul>
        <?php
            echo '
                <ul class="nav navbar-nav ml-auto">
                    <li>
                        <a href="perfilroot.php" class="nav-link active">';echo $_SESSION["usuario"]->getNombre();echo '</a>
                    </li>
                    <li>
                        <a href="../controlador/logout.php" class="nav-link">Cerrar sesión</a>
                    </li>
                </ul>
                ';
            ?>
    </nav>
    
    <h1>Hola <?php echo $_SESSION["usuario"]?> Regular</h1>
    <a href="../Controllers/Accions/AccionLogOut.php">cerrar session</a>
</body>
</html>
