<?php
class Partido {
   private $id_jornada;
   private $id_partido;
   private $eqLocal;
   private $eqVisitante;
   private $golesLocal;
   private $golesVisitante;
   
   
   public static function getPartidos($id_jornada){
        $conexion = BD::getConexion();
        $select = "Select * from partido where id_jornada = :id_jornada";
        $query = $conexion->prepare($select);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Partido");
        $query->execute([":id_jornada" => $id_jornada]);
        $partido =$query->fetchAll();
        $partidos = new Collection;
        foreach ($partido as $objPartido) {
            $objPartido->setEqLocal(Equipo::getEquipos($objPartido->getEqLocal()));
            $objPartido->setEqVisitante(Equipo::getEquipos($objPartido->getEqVisitante()));
            $partidos->add($objPartido);
        }
        return $partidos;
   }
   
   public function __construct($id_jornada = null, $eqLocal = null, $eqVisitante = null, $golesLocal = null, $golesVisitante = null, $id_partido = null) {
       $this->id_jornada = $id_jornada;
       $this->eqLocal = $eqLocal;
       $this->eqVisitante = $eqVisitante;
       if($id_partido === null) {
           $this->golesLocal = -1;
           $this->golesVisitante = -1;
       } else {
           $this->golesLocal = $golesLocal;
           $this->golesVisitante = $golesVisitante;
       }
   }
   
   public function persist() {
       $conexion = BD::getConexion();
       if($this->id_partido === null) {
            $insert = "Insert into partido (id_jornada, eqLocal, eqVisitante, golesLocal, golesVisitante) "
                    . "VALUES (:id_jornada, :eqLocal, :eqVisitante, :golesLocal, :golesVisitante)";
            $query = $conexion->prepare($insert);
            $checkout = $query->execute([":id_jornada" => $this->id_jornada, ":eqLocal" => $this->eqLocal->getId_equipo(), ":eqVisitante" => $this->eqVisitante->getId_equipo(), ":golesLocal" => $this->golesLocal, ":golesVisitante" => $this->golesVisitante]);
            if($checkout) {
                $this->setId_partido($conexion->lastInsertId());
            }
        } else {
            $update = "Update partido SET golesLocal = :golesLocal, golesVisitante = :golesVisitante WHERE id_partido = :id_partido";
            $query = $conexion->prepare($update);
            $checkout = $query->execute(array(":golesLocal" => $this->golesLocal, ":golesVisitante" => $this->golesVisitante, ":id_partido" => $this->id_partido));
        }
        return $checkout;
   }
   function getId_partido() {
       return $this->id_partido;
   }

   function setId_partido($id_partido) {
       $this->id_partido = $id_partido;
   }

      function getId_jornada() {
       return $this->id_jornada;
   }

   function getEqLocal() {
       return $this->eqLocal;
   }

   function getEqVisitante() {
       return $this->eqVisitante;
   }

   function getGolesLocal() {
       return $this->golesLocal;
   }

   function getGolesVisitante() {
       return $this->golesVisitante;
   }

   function getEstado() {
       return $this->estado;
   }

   function setId_jornada($id_jornada) {
       $this->id_jornada = $id_jornada;
   }

   function setEqLocal($eqLocal) {
       $this->eqLocal = $eqLocal;
   }

   function setEqVisitante($eqVisitante) {
       $this->eqVisitante = $eqVisitante;
   }

   function setGolesLocal($golesLocal) {
       $this->golesLocal = $golesLocal;
   }

   function setGolesVisitante($golesVisitante) {
       $this->golesVisitante = $golesVisitante;
   }

   function setEstado($estado) {
       $this->estado = $estado;
   }


}
