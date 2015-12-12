<?php
class partida {
    var $random;
    var $intentos;
    function __construct() {
        $this->random = "".rand(1, 10);
        $this->intentos = 0;
    }
    function checkNumber($num) {
        return ($num === $this->random);
    }
    function plusIntentos(){
        $this->intentos++;
    }
    function getRandom() {
        return $this->random;
    }
    function getIntentos() {
        return $this->intentos;
    }
}
