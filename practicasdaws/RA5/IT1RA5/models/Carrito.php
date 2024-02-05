<?php

class Carrito
{
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