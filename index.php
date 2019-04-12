<?php

require 'Tateti.php';
require 'Jugador.php';
require 'Tablero.php';

$tablero = new Tablero(3,3);
$jugador1 = new Jugador('Pedro', 'X');
$jugador2 = new Jugador('Carlos', 'O');
$tateti = new Tateti($tablero,$jugador1,$jugador2);

$tateti->jugar(1,1);
$tateti->jugar(0,0);
$tateti->jugar(2,2);
$tateti->jugar(0,1);
$tateti->jugar(1,2);
$tateti->jugar(0,2);
$tablero->mostrar();

