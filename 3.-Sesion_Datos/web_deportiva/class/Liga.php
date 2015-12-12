<?php
require_once 'Collection.php';
require_once 'Partido.php';
require_once 'Jornada.php';

class Liga {
    private $id_liga;
    private $nombre;
    private $jornadas;
    
    public static function getLiga($id_liga) {
        $conexion = BD::getConexion();
        $select = "Select * from liga where id_liga = :id_liga";
        $query = $conexion->prepare($select);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Liga");
        $query->execute([":id_liga" => $id_liga]);
        $liga = $query->fetch();
        if($liga) {
            $liga->setJornadas(Jornada::getJornadas($id_liga));
        }
        return $liga;
    }
    
    
    
    public function __construct($nombre = null, $id_liga = null) {
        $this->id_liga = $id_liga;
        $this->nombre = $nombre;
        $this->jornadas = new Collection();
    }
    
    public function persist() {
        if($this->id_liga === null) {
            $conexion = BD::getConexion();
            $insert = "Insert into liga (nombre) VALUES (:nombre)";
            $query = $conexion->prepare($insert);
            $checkout = $query->execute(array(":nombre" => $this->getNombre()));
            if($checkout) {
                $this->setId_liga($conexion->lastInsertId());
            }
        }
    }
    
    public function generaLiga($equipos) {
        $liga = new Collection();
        $id_equipos = [];
        foreach ($equipos as $equipo) {
            $eq = new Equipo($equipo);
            $eq->persist();
            array_push($id_equipos, $eq); 
        }
        $jornadas = (count($id_equipos)-1)*2;
        $jornada = [];
        $intervalo = new DateInterval("P7D");
        $fecha = new DateTime("2014-11-2");
        shuffle($id_equipos);
        $equiposAmb = $id_equipos;
        array_pop($equiposAmb);
        $equiposRev = new ArrayObject(array_reverse($equiposAmb, false));
        $itRev = $equiposRev->getIterator();
        $equiposAmb = new ArrayObject($equiposAmb);
        $it = $equiposAmb->getIterator();
        $equipoComodin = $id_equipos[count($equipos) - 1];
        for($i = 0; $i < $jornadas; $i++) {
            $fechaPartido = $fecha->format("Y-m-d");
            $jornada = new Jornada($this->getId_liga(), $fechaPartido);
            $jornada->persist();
            $fecha->add($intervalo);
            if($i < $jornadas / 2) {
                for ($j = 0; $j < count($id_equipos)/2; $j++) {
                    //Resetemos los iteradores
                    if(!$it->valid()) {
                        $it->rewind();
                    }
                    if(!$itRev->valid()) {
                        $itRev->rewind();
                    }
                    if($j === 0) {
                        if($j%2 === 0) {
                            $partido = new Partido($jornada->getId_jornada(), $it->current(), $equipoComodin);
                        } else {
                            $partido = new Partido($jornada->getId_jornada(), $equipoComodin, $it->current());
                        }
                    } else {
                        $partido = new Partido($jornada->getId_jornada(), $it->current(), $itRev->current());
                        $itRev->next();
                    }
                    $it->next();
                    $partido->persist();
                    $jornada->getPartidos()->add($partido);
                }
            } else {
                for ($j = 0; $j < count($id_equipos)/2; $j++) {
                    //Resetemos los iteradores
                    if(!$it->valid()) {
                        $it->rewind();
                    }
                    if(!$itRev->valid()) {
                        $itRev->rewind();
                    }
                    if($j === 0) {
                        if($j%2 === 0) {
                            $partido = new Partido($jornada->getId_jornada(), $equipoComodin, $it->current());
                        } else {
                            $partido = new Partido($jornada->getId_jornada(), $it->current(), $equipoComodin);
                        }
                    } else {
                        $partido = new Partido($jornada->getId_jornada(), $itRev->current(), $it->current());
                        $itRev->next();
                    }
                    $it->next();
                    $partido->persist();
                    $jornada->getPartidos()->add($partido);
                }
            }
            $liga->add($jornada);
        }
        return $liga;
    }
   
    function getJornada() {
        return $this->jornada;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getJornadas() {
        return $this->jornadas;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setJornadas($jornadas) {
        $this->jornadas = $jornadas;
    }

    
    function setJornada($jornada) {
        $this->jornada = $jornada;
    }
    function getId_liga() {
        return $this->id_liga;
    }

    function setId_liga($id_liga) {
        $this->id_liga = $id_liga;
    }



}
