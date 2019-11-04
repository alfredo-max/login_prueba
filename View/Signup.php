
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>

    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
    <h1>Formulario de Registro</h1>
        <form action="../Controllers/Accions/AccionSignUp.php" method="POST">
            <input type="text"  name="nombre"  placeholder="Nombre" >                                   
            <input type="text"  name="username" placeholder="Usuario" >         
            <input type="password" name="clave"    placeholder="Contraseña" >
            <input type="email"  name="correo"  placeholder="Correo" >
            <input type="submit" value="Registrar">
            <p>¿ya tienes una cuenta? <a href="login.php">ingresa aqui</a></p>
            
        </form>
    </div>
     
     
     
</body>
</html> 