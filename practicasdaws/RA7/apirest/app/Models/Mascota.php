<?php

namespace App\Models;

require_once("DBAbstractModel.php");

class Mascota extends \DBAbstractModel
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
    private $nombre="";
    private $raza="";
    private $edad=0;
    private $domicilio="";

    private $created_at;

    private $updated_at;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setRaza($raza)
    {
        $this->raza = $raza;
    }

    public function getRaza()
    {
        return $this->raza;
    }
    public function setEdad($edad)
    {
        $this->nombre = $edad;
    }
    public function getEdad()
    {
        return $this->edad;
    }

    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }

    public function getDomicilio()
    {
        return $this->domicilio;
    }

    public function getMessage()
    {
        return $this->mensaje;
    }

    public function set($user_data = array())
    {
        foreach ($user_data as $campo => $valor) {
            // $$campo = $valor;
            switch($campo) {
                case "nombre": $this->setNombre($valor);break;
                case "raza": $this->setRaza($valor);break;
                case "edad": $this->setEdad($valor);break;
                case "domicilio": $this->setDomicilio($valor);break;
            }


        }

        $this->query = "INSERT INTO mascotas(nombre,raza,edad,domicilio) VALUES(:nombre,:raza,:edad,:domicilio)";
        $this->parametros["nombre"] = $this->getNombre();
        $this->parametros["raza"] = $this->getRaza();
        $this->parametros["edad"] = $this->getEdad();
        $this->parametros["domicilio"]= $this->getDomicilio();
        $this->get_results_from_query();
        $this->mensaje = 'Mascota agregada correctamente';
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