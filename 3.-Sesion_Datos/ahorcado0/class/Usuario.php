<?php
require_once 'BD.php';

class Usuario {
    private $id_user;
    private $pass;
    private $nombre;
    private $admin;
    private $partida;
    
    public static function getUsuario($user, $pass) {
        $conexion = BD::getConexion();
        $consulta = "SELECT * FROM usuario WHERE nombre = :user AND pass = :pass";
        $select = $conexion->prepare($consulta);
        $select->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Usuario");
        $select->execute(array(":user" => $user, ":pass" => $pass));
        $usuario = $select->fetch();
        if($usuario && $usuario->admin !== "true") {
            $usuario->partida = Partida::getPartidasIniciadas($usuario->id_user);
        }
        return $usuario;
}
    public function __construct($nombre = null, $pass = null, $admin = null, $id_user = null) {
        $this->id_user = $id_user;
        $this->nombre = $nombre;
        $this->pass = $pass;
        $this->admin = $admin;
    }
    public function persist($user, $pass) {
        $conexion = BD::getConexion();
        $insert = "Insert into usuario (nombre,pass, admin) values (:user, :pass, 'false')";
        $insercion = $conexion->prepare($insert);
        try {
            $checkProcess = $insercion->execute(array(":user" => $user, ":pass" => $pass));
        } catch (Exception $ex) {
            $checkProcess = null;
        }
        if($checkProcess) {
                //generamos las partidas vacias
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
     public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setPass($pass){
        $this->pass=$pass;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPass(){
        return $this->pass;
    }
    function getId_user() {
        return $this->id_user;
    }
    function getAdmin() {
        return $this->admin;
    }
    public function getPartida() {
        return $this->partida;
    }
    function setPartida($partida) {
        $this->partida = $partida;
    }
    function setId_user($id_user) {
        $this->id_user = $id_user;
    }
    function setAdmin($admin) {
        $this->admin = $admin;
    }

    


}