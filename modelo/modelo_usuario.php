<?php
require_once('../modelo/conexion.php');
   class modelo_usuario{
        

        public function autentificar_usuario($user, $pass){
          //  echo("hola ".$user);
            $sql="SELECT usuario,clave FROM jugador WHERE USUARIO = $user AND CLAVE= $pass:";
            $resultado=conexion::conexion();

            // $usuarioIngresado=htmlentities(addslashes($_POST["usuario"]));
            // $claveIngresada=htmlentities(addslashes($_POST["clave"]));
            
            // $resultado->bindValue(":usuarioIngresado",$usuarioIngresado);
            // $resultado->bindValue(":claveIngresada",$claveIngresada);
            // $resultado->execute();
            // $numero_registro=$resultado->rowCount();
            
            // if($numero_registro!=0){// si el usuario esta en la BDD
            //    session_start();
            //    $_SESSION["usuario"]=$_POST["usuario"];
               
            //     header("location:bienvenido_usuario.php");
            // }else{
            //     echo("no estas registrado");
                
            // }




        }

        




   }



?>