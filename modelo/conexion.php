<?php

class conectar{

    public static function conexion(){
        try{
            $conexion = new PDO("mysql:host=localhost; dbname=ajedreza","root","");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //especificar el juego de caracteres
            $conexion->exec("SET CHARACTER SET utf8");
            
            }catch(Exception $e){
                echo("no se pudo conectar a la BDD");
            }

            return $conexion;
        }
        
    }
   
}


?>