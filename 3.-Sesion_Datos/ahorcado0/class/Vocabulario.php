<?php
class Vocabulario {
    private $palabras;
    private $palabra;
    
    function __construct() {
        $this->palabras = new Collection();
        $this->palabra = "";
    }
    
    function extractValues() {
        $palabras = file("folder/palabras.txt");
        foreach($palabras as $key => $palabra) {
           $this->palabras->add($palabra);
        }
    }
    function setPalabras($palabras) {
        $this->palabras = $palabras;
    }
    function getPalabras() {
        return $this->palabras;
    }
    function getPalabra() {
        return $this->palabra;
    }
    function setPalabra($palabra) {
        $this->palabra = $palabra;
    }
}
