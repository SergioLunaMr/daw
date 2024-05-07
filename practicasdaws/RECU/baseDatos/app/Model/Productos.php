<?php
namespace App\Model;

class Productos extends DBAbstractModel {
    private $id;
    private $nombre;
    private $precio;
    private $imagen;
    private static $instancia;

    public static function getInstancia() {
        if(!self::$instancia instanceof self) {
            self::$instancia = new self;
        }
        return self::$instancia;
    }

    public function __clone() {
        trigger_error("La clonación de este objeto no está permitido");
    }

    //getByID
    public function get($id = ""){
        $this->query = "SELECT productos WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->getResultsFromQuery();
        $this->mensaje = "Producto listado";
    }

    public function getAll() {
        $this->query = "SELECT * FROM productos";
        $this->getResultsFromQuery();
        $this->mensaje = "Productos mostrados.";
    }

    public function set(){
        $this->query = "INSERT INTO productos (nombre, precio, imagen) VALUES (:nombre, :precio, :imagen)";
        $this->parametros["nombre"] = $this->nombre;
        $this->parametros["precio"] = $this->precio;
        $this->parametros["imagen"] = $this->imagen;
        $this->getResultsFromQuery();
        $this->mensaje="Producto añadido.";
        echo "Entrando";
    }

    public function edit(){
        $this->query = "UPDATE productos SET nombre=:nombre, precio=:precio, imagen=:imagen WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->parametros["nombre"] = $this->nombre;
        $this->parametros["precio"] = $this->precio;
        $this->parametros["imagen"] = $this->imagen;
        $this->getResultsFromQuery();
        $this->mensaje="Producto actualizado.";
    }

    public function delete($id=""){
        $id=="" ? $id=$this->id : "";
        $this->query = "DELETE FROM productos WHERE id=:id";
        $this->parametros["id"] = $id;
        $this->getResultsFromQuery();
        $this->mensaje="Producto eliminado.";
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }


    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }


    public function getImg() {
        return $this->imagen;
    }

    public function setImg($imagen){
        $this->imagen = $imagen;
    }

}