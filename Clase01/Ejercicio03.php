<?php
/*
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido. Ejemplo 1: $a
= 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”

Costanza Lucas
*/
$a = 6;
$b = 9;
$c = 8;

$arrayNumeros = array($a, $b, $c);

sort($arrayNumeros);

if($arrayNumeros[0] == $arrayNumeros[2])
    echo "No hay valor del medio";
else
    echo "El valor del medio es: ", $arrayNumeros[1];
?>