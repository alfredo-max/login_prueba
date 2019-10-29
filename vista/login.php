<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
</head>
<body>
<h1>Formulario de ingreso</h1>
        
     <form action="../ncontrolador/accion_verificar_ingreso.php" method="POST">
         
        
         <input type="text"  id="usuario" name="usuario" placeholder="Usuario" >
         <input type="password" id="clave" name="clave"    placeholder="Contraseña" >
         <input type="submit" value="Ingresar">
         <p>¿no tienes una cuenta? <a href="signup.php">ingresa aqui</a></p>
         
     </form>
</body>
</html>