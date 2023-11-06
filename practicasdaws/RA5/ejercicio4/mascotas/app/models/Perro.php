<?php
namespace App\Models;
class Perro {
    private $_color;
    private $_nombre;
    private $_habilidad; //0 a 100
    private $_sociabilidad;
    
    public function __construct($color, $nombre) { 
        $this->_color = $color;
        $this->_nombre = $nombre;
        $this->_habilidad = 0;
        $this->_sociabilidad = 5;
    }
    
    public function entrenar() {
        if ($this->_habilidad<=100) {
            $this->_habilidad++;
        }
    }

    public function darPata() {
        $retorno = "<br/>¿Como?</br>";
        if ($this->_habilidad > 5) {
            $retorno = "<br/>Levanta la pata</br>";
        }
        echo $retorno;
    }
}
?>