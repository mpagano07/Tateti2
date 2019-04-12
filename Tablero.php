<?php

class Tablero 
{
    public $tablero = array ();

    public function __construct($fila, $columnas)
    {
       for ($i=0; $i < $fila ; $i++) { 
           $this->tablero [$i] = array();
           for ($j=0; $j <$columnas ; $j++) { 
               $this->tablero [$i][$j] = '-';
           } 
       }
        
    }
    public function marcar($posicionX, $posicionY, $marca)
    {
        $this->tablero [$posicionX][$posicionY] = $marca;
     
    }
    public function damePosicion($posicionX, $posicionY)
    {
        return $this->tablero [$posicionX][$posicionY];

    }
    public function dameTablero()
    {
        return $this->tablero;
    }
    public function mostrar()
    {
        foreach ($this->tablero as $fila){
            foreach ($fila as $columnas) {
             echo $columnas . ' ';
            }
            echo "\n";
        }
    }
}


