<?php

class Conexion{

    public static function Conectar(){
        try{
            $conexion = new PDO("mysql:host=localhost; dbname=ajedreza","root","");
     
            }catch(PDOException $e){
               
                die("no se pudo conectar a la BDD");
            }

            return $conexion;
        }
        
    }
   



?>