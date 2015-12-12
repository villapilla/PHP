<?php
require_once 'AlmacenPalabras.php';
require_once 'Collection.php';
require_once 'Jugada.php';

class Partida {
   private $intentos;
   private $letrasUsadas;
   private $fallos;
   private $palabraDescubierta;
   private $palabraSecreta;
   private $id_partida;
   private $id_user;
   private $finalizada;
   private $jugadas;
   
   public static function getPartidasIniciadas($id_user) {
        $conexion = BD::getConexion();
        $consulta = "Select * from partida WHERE id_user = :id_user AND finalizada = 'no'";
        $select = $conexion->prepare($consulta);
        $select->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Partida");
        $select->execute(array(":id_user" => $id_user));
        $partida = $select->fetchAll();
        $partidas = new Collection();
        foreach ($partida as $valor) {
            $partidas->add($valor);
        }
        return $partidas;
   }
   public static function getPartidasAcabadas($id_user) {
        $conexion = BD::getConexion();
        $consulta = "Select * from partida WHERE id_user = :id_user AND finalizada = 'yes'";
        $select = $conexion->prepare($consulta);
        $select->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Partida");
        $select->execute(array(":id_user" => $id_user));
        $partida = $select->fetchAll();
        $partidas = new Collection();
        foreach ($partida as $valor) {
            $partidas->add($valor);
        }
        return $partidas;
   }
   
    function __construct($id_user = null, $finalizada = "no", $intentos = 0, $fallos = 0, $letrasUsadas = "", $palabraDescubierta = null, $palabraSecreta = null, $id_partida = null) {
        $this->intentos = $intentos;
        $this->letrasUsadas = $letrasUsadas;
        $this->fallos = $fallos;
        if($palabraDescubierta === null) {
            $palabra = AlmacenPalabras::generaPalabras()->getPalabraAleatoria();
            $this->palabraSecreta = $palabra;
            $this->palabraDescubierta = preg_replace("/\w{1}/","_",$palabra);
        } else {
            $this->palabraDescubierta = $palabraDescubierta;
            $this->palabraSecreta = $palabraSecreta;
        }
        $this->id_partida = $id_partida;
        $this->id_user = $id_user;
        $this->finalizada =$finalizada;
        $this->jugadas = Jugada::getJugadas($id_partida);
    }

   function persist() {
        $conexion = BD::getConexion();
        if($this->getId_partida() !== null) {
            $query = "update partida SET intentos = :intentos, letrasUsadas = :letrasUsadas, palabraDescubierta = :palabraDescubierta, fallos = :fallos, finalizada = :finalizada WHERE id_partida = :id_partida";
            $update = $conexion->prepare($query);
            try {
                $checkProcess = $update->execute(array(":intentos" => $this->getIntentos(), ":letrasUsadas" => $this->getLetrasUsadas(),
                ":palabraDescubierta" => $this->getPalabraDescubierta(), ":fallos" => $this->getFallos(),":finalizada" => $this->getFinalizada(), ":id_partida" => $this->getId_partida()));
            } catch (Exception $ex) {
                $checkProcess = null;
            }
        } else {
            $insert = "Insert into partida (intentos, fallos, letrasUsadas, palabraDescubierta, palabraSecreta, finalizada, id_user) values (:intentos, :fallos, :letrasUsadas, :palabraDescubierta, :palabraSecreta, :finalizada, :id_user)";
            $insercion = $conexion->prepare($insert);
            try {
                $checkProcess = $insercion->execute(array(":intentos" => $this->getIntentos(), ":fallos" => $this->getFallos(), ":letrasUsadas" => $this->getLetrasUsadas(),
                ":palabraDescubierta" => $this->getPalabraDescubierta(), ":palabraSecreta" => $this->getPalabraSecreta(), ":finalizada" => $this->getFinalizada(),  ":id_user" => $this->getId_user()));
            } catch (Exception $ex) {
                $checkProcess = null;
            }
            if($checkProcess) {
                $this->setId_partida($conexion->lastInsertId());
            }
        }
   }
   function checkVictoria() {
       return $this->palabraSecreta === $this->palabraDescubierta;
   }
   function comprobarPalabra($letra) {
       $this->letrasUsadas .= " ".$letra;
       $this->intentos += 1;
       $palabra = $this->getPalabraSecreta();
       $posicion = strpos($palabra, $letra);
       if($posicion === false) {
           $this->fallos += 1;
       }
       while($posicion !== false) {
           $palabra[$posicion] = "_";
           $this->palabraDescubierta[$posicion] = $letra;
           $posicion = strpos($palabra, $letra);
       }
   }
   function delete() {
        $conexion = BD::getConexion();
        $query = "DELETE FROM partida WHERE id_partida = :id_partida";
        $delete = $conexion->prepare($query);
        $delete->execute(array(":id_partida" => $this->getId_partida()));
   }
   function getIntentos() {
       return $this->intentos;
   }

   function getLetrasUsadas() {
       return $this->letrasUsadas;
   }

   function getPalabraDescubierta() {
       return $this->palabraDescubierta;
   }

   function getPalabraSecreta() {
       return $this->palabraSecreta;
   }

   function setIntentos($intentos) {
       $this->intentos = $intentos;
   }

   function setLetrasUsadas($letrasUsadas) {
       $this->letrasUsadas = $letrasUsadas;
   }

   function setPalabraDescubierta($palabraDescubierta) {
       $this->palabraDescubierta = $palabraDescubierta;
   }

   function setPalabraSecreta($palabraSecreta) {
       $this->palabraSecreta = $palabraSecreta;
   }

   function getId_partida() {
       return $this->id_partida;
   }

   function getId_user() {
       return $this->id_user;
   }

   function setId_partida($id_partida) {
       $this->id_partida = $id_partida;
   }

   function setId_user($id_user) {
       $this->id_user = $id_user;
   }
   function getFallos() {
       return $this->fallos;
   }

   function setFallos($fallos) {
       $this->fallos = $fallos;
   }
   function getJugadas() {
       return $this->jugadas;
   }

   function setJugadas($jugadas) {
       $this->jugadas = $jugadas;
   }
   function getFinalizada() {
       return $this->finalizada;
   }

   function setFinalizada($finalizada) {
       $this->finalizada = $finalizada;
   }




}
