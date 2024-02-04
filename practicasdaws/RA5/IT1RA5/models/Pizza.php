<?php

require_once "Producto.php";
class Pizza extends Producto
{ 
    //Atributos
    private $tamano = "";
    //Setters y Getters
    function setPrecio($precio, $tamano=null)
    {
        $this->precio[$tamano] = $precio;
    }
    function getPrecio($tamano=null)
    {
        return $this->precio[$tamano];
    }

    function setTamano($tamano) {
        $this->tamano = $tamano;
    }
    function getPrecioElegido()
    {
        return $this->getPrecio($this->tamano);
    }
}