<?php
require_once (__DIR__."/../../Controllers/Controladores/UsuarioControlador.php");
 $filas=UsuarioDao::getUsuarios();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <h1> pagina crud</h1>

    <a href="UserNew.php">Crear usuario</a>
     <!-- tabla usuario  -->
    <h2> Tabla De Usuarios</h2>
    <?php
    if(isset($_GET["elim"])){
        if ($_GET["elim"]==1) {
            echo "<h4 style='color: green;'>Usuario eliminado</h4>";
        }
    }
    ?>
    <table id="tabla">
        <thead>
        <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Nombre</th>
        <th>Tipo Usuario</th>
        <th>Accion</th>
        </thead>

        <tbody>
           <?php 

            foreach($filas as $usuario){
                $username = $usuario['username'];
                echo("<tr>". 
                
                "<td>".$usuario['username']."</td>".
                "<td>".$usuario['email']."</td>".
                "<td>".$usuario['nombre']."</td>".
                "<td>".$usuario['tipo_usuario']."</td>".   
                "<td><a href='EditarUser.php?username=$username'>Editar</a><a href='../../Controllers/Accions/AccionEliminarUsuario.php?usr=$usrname'>ELiminar</a></td>"."</tr>");                  
            
            } 
          ?>
        </tbody>

      </table>
          <a href="../HomeUsuarioAdmin.php">Atras</a>
          <a href="../../Controllers/Accions/AccionLogOut.php">Cerrar Seccion</a>
</body>
</html>