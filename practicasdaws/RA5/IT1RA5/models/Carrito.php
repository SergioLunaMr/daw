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

    //Funciones
    public function agregarProducto($producto)
    {
        array_push($this->productos, $producto);
    }

    public function getProductosCount()
    {
        return count($this->productos);
    }

    public function getProductos()
    {
        return $this->productos;
    }


    public function sacarCuenta()
    {
        $cuenta = 0;
        foreach ($this->productos as $producto) {
            if (get_class($producto) != "Pizza") {
                $cuenta = $cuenta + ($producto->getPrecio() * $producto->getCantidad());
            } else {
                $cuenta = $cuenta + ($producto->getPrecioElegido() * $producto->getCantidad());
            }
        }
        return $cuenta;
    }
}