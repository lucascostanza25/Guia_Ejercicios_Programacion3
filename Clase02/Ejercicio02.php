<?php
/*
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán: 1 si la palabra
pertenece a algún elemento del listado.
0 en caso contrario.

Costanza Lucas
*/


function Filtro($palabra, $max){
    $estado = 0;
    $cantidad = strlen($palabra);
    if($cantidad <= $max){
        switch($palabra){
            case "Recuperatorio":
                case "Parcial":
                    case "Programación":
                        $estado = 1;
                        break;
        }
    }
                
    return $estado;
}
$resultado = Filtro("Recuperatorio", 40);
echo $resultado;