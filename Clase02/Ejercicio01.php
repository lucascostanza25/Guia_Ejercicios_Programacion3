<?php
/*
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.

Costanza Lucas
*/
$cadena = array('H', 'O', 'L', 'A');
Invertir($cadena);

function Invertir($cadena){
    for($i = count($cadena) - 1; $i >=0; $i--){
        echo $cadena[$i];
    }
}