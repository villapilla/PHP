<?php


class cuadro {
    private $id_cuadro;
    private $titulo;
    private $id_pintor;
    
    function __construct($id_cuadro = null, $titulo = null, $id_pintor = null) {
        $this->id_cuadro = $id_cuadro;
        $this->titulo = $titulo;
        $this->id_pintor = $id_pintor;
    }
    function getId_cuadro() {
        return $this->id_cuadro;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getId_pintor() {
        return $this->id_pintor;
    }

    function setId_cuadro($id_cuadro) {
        $this->id_cuadro = $id_cuadro;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setId_pintor($id_pintor) {
        $this->id_pintor = $id_pintor;
    }


    
}
