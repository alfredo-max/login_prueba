
<?php
session_start();
// si no se ha iniciado seccion
if(!isset($_SESSION["usuario"])){
   header("Location:../index.html");
}else{
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
     table,th,td{
        border: 1px solid black;      
     }
     table{
        width: 60%;
     }
    </style>
</head> 

<body>
    <h1>Hola <?php echo $_SESSION["usuario"]["username"]?> Administrador</h1>
    <a href="crud/crud.php">CROUD</a>

    <a href="../Controllers/AccionLogOut.php">cerrar session</a>
</body>
</html>
