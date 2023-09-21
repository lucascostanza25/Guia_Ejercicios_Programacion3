<?php
/*
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
utilizando las estructuras while y foreach.

Costanza Lucas
*/
$arrayEnteros = array();
echo "Array impreso con estructura for: <br>";
for($i = 0; $i <= 10; $i++)
{
    if($i % 2 != 0)
    {
        $arrayEnteros[$i] = $i;
        echo $arrayEnteros[$i]."<br>";
    }
}
echo "Array impreso con foreach: <br>";
foreach($arrayEnteros as $impares)
{
    echo $impares."<br>";
}
echo "Array impreso con while: <br>";
?>