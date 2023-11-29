<?php
require_once("DBAbstractModel.php");

class Animales extends DBAbstractModel
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

    public function getMessage()
    {
        return $this->mensaje;
    }

    public function read($user_data = array())
    {
        foreach ($user_data as $campo => $valor) {
            $$campo = $valor;
        }
        $this->query = "INSERT INTO animales(nombre) VALUES(:nombre)";

        //$this->parametros['id']= $id;s
        $this->parametros['nombre'] = $this->nombre;
        $this->get_results_from_query();
        //$this->execute_single_query();
        $this->mensaje = 'SH agregado correctamente';
    }
    public function update () {}

    public function delete () {}

    public function create () {}
}


?>