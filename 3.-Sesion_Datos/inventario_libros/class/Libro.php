<?php
require_once 'Collection.php';

class Libro {
    private $id_libro;
    private $titulo;
    private $editorial;
    private $escritor;
    private $publicacion;
    private $paginas;
    private $id_usuario;
    
    public static function getLibros($id_usuario) {
        $conexion = BD::getConexion();
        $select = "select * from libro where id_usuario = :id_usuario";
        $query = $conexion->prepare($select);
        $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Libro");
        $query->execute([":id_usuario" => $id_usuario]);
        $libros = $query->fetchAll();
        $coleccion = new Collection();
        if($libros) {
            foreach ($libros as $libro) {
                $coleccion->add($libro);
            }
        }
        return $coleccion;
    }
    public function __construct($titulo = null, $editorial = null, $escritor = null, $publicacion = null, $paginas = null, $id_usuario = null, $id_libro = null) {
        $this->id_libro = $id_libro;
        $this->titulo = $titulo;
        $this->editorial = $editorial;
        $this->escritor = $escritor;
        $this->publicacion = $publicacion;
        $this->paginas = $paginas;
        $this->id_usuario = $id_usuario;
    }
    
    function persist() {
        $conexion = BD::getConexion();
        if($this->id_libro === null) {
            $insert = "insert into libro (titulo, editorial, escritor, publicacion, paginas, id_usuario) VALUES (:titulo, :editorial, :escritor, :publicacion, :paginas, :id_usuario)";
            $query = $conexion->prepare($insert);
            $checkout = $query->execute([":titulo" =>$this->getTitulo(), ":editorial" => $this->getEditorial(), ":escritor" => $this->getEscritor(), ":publicacion" => $this->getPublicacion(), ":paginas" => $this->getPaginas(), ":id_usuario" => $this->getId_usuario()]);
            if($checkout) {
                $this->setId_libro($conexion->lastInsertId());
            }
        }
        return $checkout;
    }
    function delete() {
        $conexion = BD::getConexion();
        $insert = "delete from libro where id_libro = :id_libro";
        $query = $conexion->prepare($insert);
        $query->execute([":id_libro" => $this->getId_libro()]);
    }
    function getId_libro() {
        return $this->id_libro;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getEditorial() {
        return $this->editorial;
    }

    function getEscritor() {
        return $this->escritor;
    }

    function getPublicacion() {
        return $this->publicacion;
    }

    function getPaginas() {
        return $this->paginas;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setId_libro($id_libros) {
        $this->id_libro = $id_libros;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setEditorial($editorial) {
        $this->editorial = $editorial;
    }

    function setEscritor($escritor) {
        $this->escritor = $escritor;
    }

    function setPublicacion($publicacion) {
        $this->publicacion = $publicacion;
    }

    function setPaginas($paginas) {
        $this->paginas = $paginas;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }



    
    
    
}
