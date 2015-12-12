<?php
require_once 'BD.php';
require_once 'Cuadro.php';
require_once 'Collection.php';

class Pintor {
    private $id_pintor;
    private $nombre;
    private $cuadros;
    
    public static function getPintor($id_pintor) {
        $conexion = BD::getConexion();
        $select = "SELECT * FROM pintor WHERE id_pintor = :id_pintor";
        $query = $conexion->prepare($select);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Pintor");
        $query->execute(array(":id_pintor" => $id_pintor));
        $pintor = $query->fetch();
        if($pintor) {
           $pintor->cuadros = new Collection();
           $pintor->generaColeccion();
        }
        return $pintor;
    }
    
    public function __construct($id_pintor = null, $nombre = null) {
        $this->nombre = $nombre;
        $this->id_pintor = $id_pintor;
        $cuadro = null;
    }
    
    function generaColeccion() {
        $conexion = BD::getConexion();
        $select = "SELECT * FROM cuadros WHERE id_pintor = :id";
        $query = $conexion->prepare($select);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Cuadro");
        $query->execute(array(":id" => $this->id_pintor));
        $coleccion = $query->fetchAll();
        foreach ($coleccion as $cuadro) {
            $this->cuadros->add($cuadro);
        }
    }
    
    function generaCuadroAleatorio() {
        $tamanio = $this->getCuadros()->getNumObjects();
        $cuadroElegido = rand(0, $tamanio-1);
        return $this->cuadros->getObjNum($cuadroElegido);
    }
            
    function getId_pintor() {
        return $this->id_pintor;
    }
    function getNombre() {
        return $this->nombre;
    }
    function setId_pintor($id_pintor) {
        $this->id_pintor = $id_pintor;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function getCuadros() {
        return $this->cuadros;
    }
    function setCuadros($cuadro) {
        $this->cuadro = $cuadro;
    }
}
