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
</head>
<body>
    <h1>Hola <?php echo $_SESSION["usuario"]["username"] ?> Regular</h1>
    <a href="../Controllers/AccionLogOut.php">cerrar session</a>
</body>
</html>
