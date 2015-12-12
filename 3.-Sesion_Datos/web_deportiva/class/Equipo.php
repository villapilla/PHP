<?php
require_once 'BD.php';

class Equipo {
    
    private $id_equipo;
    private $nombre;
    private $puntos;
    private $golesF;
    private $golesC;
    private $difG;
    
   public static function getEquipos($id_equipo) {
        $conexion = BD::getConexion();
        $select = "Select * from equipo where id_equipo = :id_equipo";
        $query = $conexion->prepare($select);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Equipo");
        $query->execute([":id_equipo" => $id_equipo]);
        $equipo = $query->fetch();
        return $equipo;
   }
   
   
    
    public function __construct($nombre = null, $id_equipo = null, $puntos = null, $golesF = null, $golesC = null, $difG = null) {
        $this->id_equipo = $id_equipo;
        $this->nombre = $nombre;
        if($puntos !== null) {
            $this->puntos = $puntos;
            $this->golesC = $golesC;
            $this->golesF = $golesF;
            $this->difG = $difG;
        } 
    }
    
    public function persist() {
        if($this->id_equipo === null) {
            $conexion = BD::getConexion();
            $insert = "Insert into equipo (nombre) VALUES (:nombre)";
            $query = $conexion->prepare($insert);
            $checkout = $query->execute(array(":nombre" => $this->nombre));
            if($checkout) {
                $this->setId_equipo($conexion->lastInsertId());
            }
        }
    }
    function getId_equipo() {
        return $this->id_equipo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId_equipo($id_equipo) {
        $this->id_equipo = $id_equipo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getPuntos() {
        return $this->puntos;
    }

    function getGolesF() {
        return $this->golesF;
    }

    function getGolesC() {
        return $this->golesC;
    }

    function setPuntos($puntos) {
        $this->puntos = $puntos;
    }

    function setGolesF($golesF) {
        $this->golesF = $golesF;
    }

    function setGolesC($golesC) {
        $this->golesC = $golesC;
    }
    function getDifG() {
        return $this->difG;
    }

    function setDifG() {
        $this->difG = $this->golesF - $this->golesC;
    }


}

