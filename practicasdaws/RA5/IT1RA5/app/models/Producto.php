<?php
require_once("DBAbstractModel.php");

class Producto extends DBAbstractModel
{
    //Singleton
    private static $instancia;
    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }

    public function __clone()
    {
        trigger_error("La clonación no está permitida.", E_USER_ERROR);
    }

    private $id;
    private $nombre;

    private $created_at;

    private $updated_at;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setID($id)
    {
        $this->id = $id;
    }

    public function getMessage()
    {
        return $this->mensaje;
    }

    // public function set($user_data = array())
    // {
    //     foreach ($user_data as $campo => $valor) {
    //         $$campo = $valor;


    //     }

    //     $this->query = "INSERT INTO animales(nombre) VALUES(:nombre)";
    //     $this->parametros["nombre"] = $nombre;
    //     $this->get_results_from_query();
    //     $this->mensaje = 'Animal agregado correctamente';
    // }

    public function set()
    {
        $this->query = "INSERT INTO animales(nombre) VALUES(:nombre)";
        //$this->parametros['id']= $id;
        $this->parametros['nombre'] = $this->nombre;
        $this->get_results_from_query();
        //$this->execute_single_query();
        $this->mensaje = 'Animal agregado correctamente';
    }

    public function get($id = "")
    {
        $this->query = "SELECT * FROM animales WHERE id=(:id)";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->rows;
    }
    public function edit()
    {
        $this->query = "UPDATE animales SET nombre=:nombre WHERE id=:id";
        $this->parametros['id'] = $this->id;
        $this->parametros['nombre']=$this->nombre;
        var_dump($this->parametros);
        $this->get_results_from_query();
    }

    public function delete()
    {
    }


}


?>