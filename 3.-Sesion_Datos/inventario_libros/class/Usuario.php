<?php
require_once 'BD.php';

class Usuario {
    private $id_usuario;
    private $nombre;
    private $password;
    private $libros;
    
    public static function getUser($nombre, $pass) {
        $conexion = BD::getConexion();
        $select = "select * from usuario where nombre = :nombre AND password = :password";
        $query = $conexion->prepare($select);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Usuario");
        $query->execute([":nombre" => $nombre, ":password" => $pass]);
        $usuario = $query->fetch();
        if($usuario) {
            $usuario->setLibros(Libro::getLibros($usuario->getId_usuario()));
        }
        return $usuario;
    }
    public function __construct($nombre = null, $password = null, $id_usuario = null, $libros = null) {
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->password = $password;
        $this->libros = new Collection();
    }
    public function persist() {
        $conexion = BD::getConexion();
        if($this->id_usuario === null) {
            $insert = "insert into usuario (nombre, password) VALUES (:nombre, :password)";
            $query = $conexion->prepare($insert);
            $checkout = $query->execute([":nombre" => $this->getNombre(), ":password" => $this->getPassword()]);
            if($checkout) {
                $this->setId_usuario($conexion->lastInsertId());
            }
        }
        return $checkout;
    }
    
    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPassword() {
        return $this->password;
    }

    function getLibros() {
        return $this->libros;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setLibros($libros) {
        $this->libros = $libros;
    }


    
}
