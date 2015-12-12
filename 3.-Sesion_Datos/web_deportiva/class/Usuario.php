<?php
require_once 'BD.php';
require_once 'Collection.php';

class Usuario {
    private $id_user;
    private $nombre;
    private $password;
    private $id_liga;
    
    
    public static function getUsuario($nombre, $password) {
        $conexion = BD::getConexion();
        $select = "Select * from usuario where nombre = :nombre AND password = :password";
        $query = $conexion->prepare($select);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Usuario");
        $query->execute([":nombre" => $nombre, ":password" => $password]);
        $usuario = $query->fetch();
        return $usuario;
    }
    
    function __construct($id_user = null, $nombre = null, $password = null, $id_liga = null) {
        $this->id_user = $id_user;
        $this->nombre = $nombre;
        $this->password = $password;
        if($id_liga !== null) {
            $this->id_liga = $id_liga;
        }
    }
    
    public function persist() {
        $conexion = BD::getConexion();
        $update = "Update usuario SET id_liga = :id_liga where id_user = :id_user";
        $query = $conexion->prepare($update);
        $query->execute(array(":id_liga" => $this->id_liga, ":id_user" => $this->id_user));
    }
    function getId_user() {
        return $this->id_user;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPassword() {
        return $this->password;
    }

    function getId_Liga() {
        return $this->id_liga;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setId_Liga($id_liga) {
        $this->id_liga = $id_liga;
    }


}
