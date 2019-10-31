
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
     <form action="../Controllers/Accion/AccionSignUp.php" method="POST">
         
         <input type="nombre"  name="nombre"  placeholder="Nombre" >                           
         <input type="text"   name="usuario" placeholder="Usuario" >
         <input type="password" name="clave"    placeholder="Contraseña" >
         <input type="correo"  name="correo"  placeholder="Correo" >
         <input type="submit" value="Registrar">
         <p>¿ya tienes una cuenta? <a href="login.php">ingresa aqui</a></p>
         
     </form>
     
     
     
</body>
</html> 