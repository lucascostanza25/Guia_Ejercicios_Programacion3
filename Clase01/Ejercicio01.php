<?php
/*
Ejercicio 01: Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.
Costanza Lucas
*/

$suma = 0;
$contador = 0;

while($suma <= 1000)
{
    $contador++;
    $suma += $contador;
}
echo "Suma total: ", $suma."$<br>";
echo "Cantidad de numeros sumados: ", $contador;
?>