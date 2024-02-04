<?php

class Producto
{
    //Atributos
    private $nombre;
    private $imagen;
    private $precio;
    //Constructor
    public function __construct($nombre, $imagen, $precio)
    {
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->precio = $precio;  
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
}