<?php

class Carrito
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

    //Atributos
    private $productos = array();
    private $cuenta;

    //Constructor
    public function __construct()
    {
        $this->cuenta=0;
    }

    //Funciones
    public function agregarProducto($producto) {
        array_push($this->productos, $producto);
    }

    public function sacarCuenta() {
        foreach($this->productos as $producto) {
                $this->cuenta = $this->cuenta + $producto["precio"];
        }
        return $this->cuenta;
    }
}