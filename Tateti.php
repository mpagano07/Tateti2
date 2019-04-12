<?php


$tablero = array();

class Tateti
{
    private $turno;

    public function __construct(Tablero $tablero, Jugador $jugador1, Jugador $jugador2)
    {
        $this->tablero = $tablero;
        $this->jugador1 = $jugador1;
        $this->turno = $jugador1;
        $this->jugador2 = $jugador2;
    }
    public function jugar($posicionX, $posicionY)
    {
        //tiene que marcar la posicion seleccionada y alternar de jugadores  
        if ($this->turno == $this->jugador1) {
            $this->tablero->marcar($posicionX, $posicionY, $this->turno->dameMarca());
            $this->turno = $this->jugador2;
            self::ganador();
        } else {
            $this->tablero->marcar($posicionX, $posicionY, $this->turno->dameMarca());
            $this->turno = $this->jugador1;
            self::ganador();
        }
    }
    public function ganador()
    {

        for ($i = 0; $i <= 2; $i++) {

            if ($this->tablero->damePosicion($i, 0) != '-' and $this->tablero->damePosicion($i, 0) == $this->tablero->damePosicion($i, 1) and $this->tablero->damePosicion($i, 1) == $this->tablero->damePosicion($i, 2)) {
                if ($this->tablero->damePosicion($i, 0) == 'X') {
                    echo "el ganador es  X " . "\n";
                }
                if ($this->tablero->damePosicion($i, 0) == 'O') {
                    echo "el ganador es  O " . "\n";
                }
                return true;
            }
            if ($this->tablero->damePosicion(0, $i) != '-' and $this->tablero->damePosicion(0, $i) == $this->tablero->damePosicion(1, $i) and $this->tablero->damePosicion(1, $i) == $this->tablero->damePosicion(2, $i)) {
                if ($this->tablero->damePosicion(0, $i) == 'X') {
                    echo "el ganador es  X " . "\n";
                }
                if ($this->tablero->damePosicion(0, $i) == 'O') {
                    echo "el ganador es  O " . "\n";
                }
                return true;
            }
            return false;
        }
    }
}
