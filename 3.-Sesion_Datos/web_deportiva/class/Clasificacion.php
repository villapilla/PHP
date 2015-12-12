<?php
class Clasificacion {
    private $equipos;
    


    public static function generateClasificacion($liga) {
        $jornadasAll = $liga->getJornadas();
        $jornadas = new Collection;
        $jornadaActual = $jornadasAll->iterate();
        while($jornadaActual) {
            if($jornadaActual->getEstado() === "true") {
                $jornadas->add($jornadaActual);
            }
            $jornadaActual = $jornadasAll->iterate(); 
        }
        $equipos = new Collection();
        $jornadaActual = $jornadas->iterate();
        while($jornadaActual) {
            $partidos = $jornadaActual->getPartidos();
            $partidoActual = $partidos->iterate();
            if($equipos->isEmpty()) {
                $partidos->resetIterator();
                $partidoActual = $partidos->iterate();
                while($partidoActual) {
                    $equipoLocal = new Equipo($partidoActual->getEqLocal()->getNombre(), $partidoActual->getEqLocal()->getId_equipo(), 0, 0, 0, 0);
                    $equipoVisitante = new Equipo($partidoActual->getEqVisitante()->getNombre(), $partidoActual->getEqVisitante()->getId_equipo(), 0, 0, 0, 0);
                    $equipos->add($equipoLocal);
                    $equipos->add($equipoVisitante);
                    $partidoActual = $partidos->iterate();
                }
                $partidos->resetIterator();
                $partidoActual = $partidos->iterate();
            }
            while($partidoActual) {
                $equipoLocal = $equipos->getByProperty("id_equipo", $partidoActual->getEqLocal()->getId_equipo());
                $equipoVisitante = $equipos->getByProperty("id_equipo", $partidoActual->getEqVisitante()->getId_equipo());
                $golesL = $partidoActual->getGolesLocal();
                $golesV = $partidoActual->getGolesVisitante();
                if($golesL > $golesV) {
                    $equipoLocal->setPuntos(($equipoLocal->getPuntos()) + 3);
                } else {
                    if($golesL < $golesV) {
                        $equipoVisitante->setPuntos(($equipoVisitante->getPuntos()) + 3);
                    } else {
                        $equipoLocal->setPuntos(($equipoLocal->getPuntos()) + 1);
                        $equipoVisitante->setPuntos(($equipoVisitante->getPuntos()) + 1);
                    }
                }
                $equipoLocal->setGolesF(($equipoLocal->getGolesF()) + $golesL);
                $equipoLocal->setGolesC(($equipoLocal->getGolesC()) + $golesV);
                $equipoVisitante->setGolesF(($equipoVisitante->getGolesF()) + $golesV);
                $equipoVisitante->setGolesC(($equipoVisitante->getGolesC()) + $golesL);
                $equipoLocal->setDifG();
                $equipoVisitante->setDifG();
                $partidoActual = $partidos->iterate();
            }
            $jornadaActual = $jornadas->iterate();
        }
        return $equipos;
    }
    
    function __construct($equipos = null) {
        $this->equipos = $equipos;
    }
    
    function getEquipos() {
        return $this->equipos;
    }

    function setEquipos($equipos) {
        $this->equipos = $equipos;
    }



}
