<?php
session_start();
if (isset($_SESSION["tipo"])) {
  if($_SESSION["tipo"]=='usuario_regular') header("Location: HomeUsuarioRegular.php");
}
session_abort();

require_once (__DIR__."/../../Controllers/Controladores/UsuarioControlador.php");
 $filas=UsuarioDao::getUsuarios();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/solid.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/all.css">

    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a href="../HomeUsuarioAdmin.php" class="nav-link">Inicio</a>
            </li>
        </ul>
        <?php
        session_start();
            echo '
                <ul class="nav navbar-nav ml-auto">
                    <li>
                        <a href="../../Controllers/Accions/AccionVerPerfil.php" class="nav-link active">';echo $_SESSION["usuario"];echo '</a>
                    </li>
                    <li>
                        <a href="../../Controllers/Accions/AccionLogOut.php" class="nav-link">Cerrar sesión</a>
                    </li>
                </ul>
                ';
            ?>
   </nav>

    <div class="container"><br><br>
        <div class="row">
            <div class="col-sm-12 bg-dark text-light">
                <h1> Pagina crud</h1>
                <a class="btn btn-primary" href="../HomeUsuarioAdmin.php">Atras</a>
                <a class="btn btn-success" href="UserNew.php">Crear usuario</a>
                <!-- tabla usuario  -->
                <h2> Tabla De Usuarios</h2>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12">
            <?php
            if(isset($_GET["elim"])){
                if ($_GET["elim"]==1) {
                    echo '<div class="alert alert-success" role="alert">
                            Usuario Eliminado
                            </div>';
                }
            }
            if(isset($_GET["in"]) && $_GET["in"]==1) {   echo '<div class="alert alert-success" role="alert">
                                                                Usuario Editado
                                                                </div>';
            }
            if(isset($_GET["reg"]) && $_GET["reg"]==0){
                echo '<div class="alert alert-warning" role="alert">
                            Debe completar los datos
                            </div>';
            }else if(isset($_GET["reg"]) && $_GET["reg"]==1){
                echo '<div class="alert alert-success" role="alert">
                            Usuario registrado
                            </div>';
            }else if(isset($_GET["reg"]) && $_GET["reg"]==2){
                echo '<div class="alert alert-success" role="alert">
                            Ese usuario está en uso
                            </div>';
            }
            ?>
            <table id="tabla" class="table table-dark text-light">
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
                        "<td><a class='btn btn-primary' href='EditarUser.php?username=$username'>Editar</a>"."    "."<a class='btn btn-danger' href='../../Controllers/Accions/AccionEliminarUsuario.php?usr=$username'>ELiminar</a></td>"."</tr>");                  
                    
                    } 
                ?>
                </tbody>
            </div>
        </div>
    </div>
      </table>
</body>
</html>