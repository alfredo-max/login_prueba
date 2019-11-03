<?php
require_once ("../../Controllers/UsuarioControlador.php");
 $filas=getUsuarios();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <h1> pagina crud</h1>

    <a href="#">Crear usuario</a>
     <!-- tabla usuario  -->
    <h2> Tabla De Usuarios</h2>
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
                echo("<tr>". 
                
                "<td>".$usuario['username']."</td>".
                "<td>".$usuario['email']."</td>".
                "<td>".$usuario['nombre']."</td>".
                "<td>".$usuario['tipo_usuario']."</td>".       
                "<td>  <a href='#'>Editar</a>  <a href='#'>ELiminar</a> </td"    
                ."</tr>");                  
            
            } 
          ?>
        </tbody>

      </table>

</body>
</html>