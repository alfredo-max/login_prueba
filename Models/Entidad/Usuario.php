<?php
  class Usuario{
    private $username;
    private $clave;
    private $email;
    private $nombre;
    private $tipoUsuario;
  
    public  function __construct($username,$clave,$email,$nombre,$tipo_usuario){
     $this->username=$username;
     $this->clave=$clave;
     $this->email=$email;
     $this->nombre=$nombre;
     $this->tipoUsuario=$tipo_usuario;
    }
    public function getUsername(){
      return $this->username;
    }
    public function getClave(){
      return $this->clave;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getNombre(){
      return $this->nombre;
    }
    public function getTipoUsuario(){
      return $this->tipoUsuario;
    }
  }

?>