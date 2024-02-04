<?php

class Producto
{
    //Atributos
    private $nombre;
    private $imagen;
    protected $precio;
    private $cantidad;
    //Constructor
    public function __construct($nombre, $imagen, $precio)
    {
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->precio = $precio;  
        $this->cantidad=0;
    }
    //Setters y Getters
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getImagen()
    {
        return $this->imagen;
    }

    function getPrecio()
    {
        return $this->precio;
    }

    function getCantidad()
    {
        return $this->cantidad;
    }

}