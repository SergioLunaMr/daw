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
    private $nombre = "";
    private $telefono = "";
    private $email = "";

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

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setEmail($email)
    {
        $this->nombre = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }


    public function getMessage()
    {
        return $this->mensaje;
    }

    public function set($user_data = array())
    {
        foreach ($user_data as $campo => $valor) {
            // $$campo = $valor;
            switch ($campo) {
                case "nombre":
                    $this->setNombre($valor);
                    break;
                case "telefono":
                    $this->setTelefono($valor);
                    break;
                case "email":
                    $this->setEmail($valor);
                    break;
            }


        }

        $this->query = "INSERT INTO mascotas(nombre,raza,edad,domicilio) VALUES(:nombre,:raza,:edad,:domicilio)";
        $this->parametros["nombre"] = $this->getNombre();
        $this->parametros["telefono"] = $this->getTelefono();
        $this->parametros["email"] = $this->getEmail();
        $this->get_results_from_query();
        $this->mensaje = 'Contacto agregada correctamente';
    }



    public function get($id = "")
    {
        $this->query = "SELECT * FROM animales WHERE id=(:id)";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->rows;
    }
    public function edit($user_data=array(), $id)
    {
        foreach ($user_data as $campo => $valor) {
            $$campo = $valor;
        }
    }

    public function delete()
    {
    }


}


?>