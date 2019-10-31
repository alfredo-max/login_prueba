<?php

  class Jugador{
    private $username;
    private $clave;
    private $gmail;
    private $nombre;
  
    public function Jugador($username,$clave,$gmail,$nombre){
     $this->username=$username;
     $this->clave=$clave;
     $this->gmail=$gmail;
     $this->nombre=$nombre;
    }
  }



?>