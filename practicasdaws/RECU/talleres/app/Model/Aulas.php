<?php
namespace App\Model;

class Aulas extends DBAbstractModel {
    private $id;
    private $num_aula;
    private $descripcion;
    private $num_mesas;
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
        $this->query = "SELECT aulas WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->getResultsFromQuery();
        $this->mensaje = "Aulas listada";
        return $this;
    }

    public function getAll() {
        $this->query = "SELECT * FROM productos";
        $this->getResultsFromQuery();
        $this->mensaje = "Aulas mostradas.";
        return $this;
    }

    public function set(){
        $this->query = "INSERT INTO aulas (num_aula, descripcion, num_mesas) VALUES (:num_aula, :descripcion, :num_mesas)";
        $this->parametros["num_aula"] = $this->num_aula;
        $this->parametros["descripcion"] = $this->descripcion;
        $this->parametros["num_mesas"] = $this->num_mesas;
        $this->getResultsFromQuery();
        $this->mensaje="Aula añadida.";
        return $this;
    }

    public function edit(){
        $this->query = "UPDATE aulas SET num_aula=:num_aula, descripcion=:descripcion, num_mesas=:num_mesas WHERE id=:id";
        $this->parametros["id"] = $this->id;
        $this->parametros["num_aula"] = $this->num_aula;
        $this->parametros["descripcion"] = $this->descripcion;
        $this->parametros["num_mesas"] = $this->num_mesas;
        $this->getResultsFromQuery();
        $this->mensaje="Aula actualizada.";
        return $this;
    }

    public function delete($id=""){
        $id=="" ? $id=$this->id : "";
        $this->query = "DELETE FROM aulas WHERE id=:id";
        $this->parametros["id"] = $id;
        $this->getResultsFromQuery();
        $this->mensaje="Aula eliminada.";
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNumAula() {
        return $this->num_aula;
    }

    public function setNumAula($num_aula){
        $this->num_aula = $num_aula;
    }


    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }


    public function getNumMesas() {
        return $this->num_mesas;
    }

    public function setNumMesas($num_mesas){
        $this->num_mesas = $num_mesas;
    }

}