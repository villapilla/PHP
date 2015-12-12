<?php
require_once 'Collection.php';
require_once 'BD.php';

class Jugada {
    
    private $id_jugada;
    private $id_partida;
    private $letra;
    private $palabraDescubierta;
    
    public static function getJugadas($id_partida) {
        $conexion = BD::getConexion();
        $consulta = "SELECT id_jugada, letra, palabraDescubierta FROM jugada WHERE id_partida = :id_partida";
        $select = $conexion->prepare($consulta);
        $select->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Jugada");
        $select->execute(array(":id_partida" => $id_partida));
        $jugada = $select->fetchAll();
        $jugadas = new Collection();
        if($jugada) {
            foreach ($jugada as $valor) {
                $jugadas->add($valor);
            }
        }
        return $jugadas;
    }
    
    public function __construct($id_partida = null, $letra = null, $palabraDescubierta = null, $id_jugada = null) {
        $this->id_jugada = $id_jugada;
        $this->id_partida = $id_partida;
        $this->letra = $letra;
        $this->palabraDescubierta = $palabraDescubierta;
    }
    
    public function persist() {
        $conexion = BD::getConexion();
        $insert = "Insert into jugada (letra, palabraDescubierta, id_partida, id_jugada) values (:letra, :palabraDescubierta, :id_partida, :id_jugada)";
        $insercion = $conexion->prepare($insert);
        try {
            $checkProcess = $insercion->execute(array(":letra" => $this->getLetra(),
                ":palabraDescubierta" => $this->getPalabraDescubierta(), ":id_partida" => $this->getId_partida(), ":id_jugada" => $this->getId_jugada()));
        } catch (Exception $ex) {
            $checkProcess = null;
        }
    }
    function getId_partida() {
        return $this->id_partida;
    }

    function getLetra() {
        return $this->letra;
    }

    function getPalabraDescubierta() {
        return $this->palabraDescubierta;
    }

    function setId_partida($id_partida) {
        $this->id_partida = $id_partida;
    }

    function setLetra($letra) {
        $this->letra = $letra;
    }

    function setPalabraDescubierta($palabraDescubierta) {
        $this->palabraDescubierta = $palabraDescubierta;
    }
    function getId_jugada() {
        return $this->id_jugada;
    }

    function setId_jugada($id_jugada) {
        $this->id_jugada = $id_jugada;
    }
}
