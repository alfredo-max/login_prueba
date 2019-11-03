<?php
  class Usuario{
    private $username;
    private $clave;
    private $email;
    private $nombre;
    private $tipoUsuario;
    
    
    // public  function Usuario($username,$clave,$email,$nombre,$tipo_usuario){
    //  $this->username=$username;
    //  $this->clave=$clave;
    //  $this->email=$email;
    //  $this->nombre=$nombre;
    //  $this->tipoUsuario=$tipo_usuario;
    // }
    public function getUsername(){
      return $this->username;
    }
    public function setUsername($username){
      $this->username=$username;
    }
    public function getClave(){
      return $this->clave;
    }
    public function setClave($clave){
     $this->clave=$clave;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setEmail($email){
      $this->email=$email;
     }
    public function getNombre(){
      return $this->nombre;
    }
    public function setNombre($nombre){
     $this->nombre=$nombre;
    }
    public function getTipoUsuario(){
      return $this->tipoUsuario;
    }
    public function setTipoUsuario($tipo_usuario){
       $this->tipoUsuario=$tipo_usuario;
    }
  }

?>