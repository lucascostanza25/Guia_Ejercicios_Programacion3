<?php
/*
Ejercicio 02: Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.
*/
$mesActual = date("m");
echo "Fecha actual formato uno: ", date("Y-m-d")."<br>";
echo "Fecha actual formato dos: ", date("Y/m/d")."<br>";
echo "Fecha actual formato tres: ", date("Y.m.d")."<br>";

switch ($mesActual) {
    case 12:
    case 1:
    case 2:
        $estacion = 'Verano';
        break;
    case 3:
    case 4:
    case 5:
        $estacion = 'Otoño';
        break;
    case 6:
    case 7:
    case 8:
        $estacion = 'Invierno';
        break;
    case 9:
    case 10:
    case 11:
        $estacion = 'Primavera';
        break;
}

echo "La estación actual es: ", $estacion;
?>