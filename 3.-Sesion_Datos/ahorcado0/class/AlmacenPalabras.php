<?php

class AlmacenPalabras {
    private static $instance = null;
    
    
    public static function generaPalabras() {
        if (self::$instance === null) {
            self::$instance = new AlmacenPalabras("folder/palabras.txt");
        }
        return self::$instance;
    }
    
    protected $fichero = "folder/palabras.txt";
    protected $palabras;
    
    function __construct($fichero) {
        $this->palabras = new Collection();
        $palabras = file($fichero, FILE_IGNORE_NEW_LINES);
        foreach($palabras as $palabra) {
           $this->palabras->add($palabra);
        }
    }
  
    
    function getPalabraAleatoria() {
        $tamanio = $this->getPalabras()->getNumObjects();
        $palabraElegida = rand(0, $tamanio-1);
        return $this->palabras->getObjNum($palabraElegida);
    }
    
    function setPalabras($palabras) {
        $this->palabras = $palabras;
    }
    function getPalabras() {
        return $this->palabras;
    }
}

