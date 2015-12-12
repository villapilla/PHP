<?php 
 class Conexion extends PDO { 
   private $tipo_de_base = 'mysql';
   private $host = 'localhost';
   private $nombre_de_base;
   private $usuario;
   private $pass; 
   public function __construct($base, $user, $pass) {
      //Sobreescribo el método constructor de la clase PDO.
      $this->nombre_de_base = $base;
      $this->usuario = $user;
      $this->pass = $pass;
      try{
         parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->pass);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   } 
 } 
?>