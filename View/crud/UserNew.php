
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Crear Usuario</h1>
     <form action="../../Controllers/Accions/AccionUserNew.php" method="POST">
     <input type="text"  name="nombre"  placeholder="Nombre" >                                   
         <input type="text"  name="username" placeholder="Usuario" >         
         <input type="password" name="clave"    placeholder="Contraseña" >
         <input type="email"  name="correo"  placeholder="Correo" >
         <input type="text"  name="tipo_usuario"  placeholder="Tipo de usuario" >
         <input type="submit" value="Registrar">
         <a href="UserNew.php">Crear otro usuario</a>
         
     </form>
     
     
     
</body>
</html> 