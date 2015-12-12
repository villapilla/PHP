<?php
require_once 'Collection.php';
require_once 'BD.php';

class Jornada {
    private $id_jornada;
    private $fecha;
    private $id_liga;
    private $estado;
    private $partidos;
    
    
    public static function getJornadas($id_liga) {
        $conexion = BD::getConexion();
        $select = "Select * from jornada where id_liga = :id_liga";
        $query = $conexion->prepare($select);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Jornada");
        $query->execute([":id_liga" => $id_liga]);
        $jornada = $query->fetchAll();
        $jornadas = new Collection();
        foreach ($jornada as $objJornada) {
            $objJornada->setPartidos(Partido::getPartidos($objJornada->getId_jornada()));
            $jornadas->add($objJornada);
        }
        return $jornadas;
    }
    
    
    
    public function __construct($id_liga = null, $fecha = null ,$id_jornada = null, $estado = null) {
        $this->id_liga = $id_liga;
        $this->id_jornada = $id_jornada;
        $this->fecha = $fecha;
        $this->partidos = new Collection();
        if($estado === null) {
            $this->estado = "false";
        } else {
            $this->estado = $estado;
        }
    }
    public function persist() {
        $conexion = BD::getConexion();
        if($this->id_jornada === null) {
            $insert = "Insert into jornada (fecha, estado, id_liga) VALUES (:fecha, :estado, :id_liga)";
            $query = $conexion->prepare($insert);
            $checkout = $query->execute(array(":fecha" => $this->fecha, ":estado" => $this->estado, ":id_liga" => $this->id_liga));
            if($checkout) {
                $this->setId_jornada($conexion->lastInsertId());
            }
        } else {
            $update = "update jornada SET estado = :estado where id_jornada = :id_jornada";
            $query = $conexion->prepare($update);
            $query->execute([":estado" => $this->estado, ":id_jornada" => $this->id_jornada]);
        }
    }
    
    function getId_jornada() {
        return $this->id_jornada;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getPartidos() {
        return $this->partidos;
    }

    function setId_jornada($id_jornada) {
        $this->id_jornada = $id_jornada;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setPartidos($partidos) {
        $this->partidos = $partidos;
    }

    function getId_liga() {
        return $this->id_liga;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId_liga($id_liga) {
        $this->id_liga = $id_liga;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }


    
}
