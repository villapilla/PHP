<?php
require_once 'BD.php';
require_once 'pintor.php';

class Usuario {
    private $id_user;
    private $nombre;
    private $pass;
    private $email;
    private $id_pintor;
    
    public static function getUsuario($user, $pass) {
        $conexion = BD::getConexion();
        $consulta = "SELECT * FROM usuario WHERE nombre = :user AND pass = :pass";
        $select = $conexion->prepare($consulta);
        $select->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Usuario");
        $select->execute(array(":user" => $user, ":pass" => $pass));
        $usuario = $select->fetch();
        if($usuario) {
            $pintor = $usuario->getPintor();
            $usuario->setPintor(Pintor::getPintor($pintor));
        }
        return $usuario;
}
    public function __construct($nombre = null, $pass = null, $email = null, $id_pintor = null,$id_user = null) {
        $this->id_user = $id_user;
        $this->nombre = $nombre;
        $this->pass = $pass;
        $this->email = $email;
        $this->id_pintor = $id_pintor;
    }
    public function persist() {
        $conexion = BD::getConexion();
        if($this->getId() !== null) {
            $query = "update usuario SET nombre = :user, pass = :pass, email = :email, id_pintor = :pintor WHERE id_user = :id_usuario";
            $update = $conexion->prepare($query);
            try {
                $checkProcess = $update->execute(array(":user" => $this->getnombre(), ":pass" => $this->getPass(),
                ":email" => $this->getEmail(), ":pintor" => $this->getPintor(), "id_usuario" => $this->getId()));
            } catch (Exception $ex) {
                $checkProcess = null;
            }
            if($checkProcess) {
                $pintor = $this->getPintor();
                $this->setPintor(Pintor::getPintor($pintor));
            }
        } else {
            $insert = "Insert into usuario (nombre,pass,email,id_pintor) values (:user, :pass, :email, :pintor)";
            $insercion = $conexion->prepare($insert);
            try {
                $checkProcess = $insercion->execute(array(":user" => $this->getnombre(), ":pass" => $this->getPass(),
                ":email" => $this->getEmail(), ":pintor" => $this->getPintor()));
            } catch (Exception $ex) {
                $checkProcess = null;
            }
            if($checkProcess) {
                $this->setId($conexion->lastInsertId());
                $pintor = $this->getPintor();
                $this->setPintor(Pintor::getPintor($pintor));
            }
        }
        return $checkProcess;
    }
    public function delete() {
        $conexion = BD::getConexion();
        $query = "DELETE FROM usuario WHERE id_user = :id_user";
        $delete = $conexion->prepare($query);
        $delete->execute(array(":id_user" => $this->getId()));
    }
    public function setId($id) {
         $this->id_user = $id;
    }
    public function getId() {
        return $this->id_user;
    }
     public function setnombre($nombre){
        $this->nombre = $nombre;
    }
    public function setPass($pass){
        $this->pass=$pass;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPintor($pintor){
        $this->id_pintor=$pintor;
    }
    public function getnombre(){
        return $this->nombre;
    }
    public function getPass(){
        return $this->pass;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPintor(){
        return $this->id_pintor;
    }
}