<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
</head>
<body>
<h1>Formulario de ingreso</h1>
        
     <form action="../Controllers/Accion/AccionLogin.php" method="POST">
         <input type="text"  name="username"  placeholder="Usuario" >         
         <input type="password"  name="clave"  placeholder="Contraseña" >
         <input type="submit" value="Ingresar">
         <p>¿no tienes una cuenta? <a href="signup.php">ingresa aqui</a></p>
         
     </form>
</body>
</html>