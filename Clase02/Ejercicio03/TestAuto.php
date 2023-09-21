<?php
include 'Ejercicio03.php';

$auto1 = new Auto("Toyota", "Rojo");
$auto2 = new Auto("Toyota", "Azul");
$auto3 = new Auto("Honda", "Rojo", 2000);
$auto4 = new Auto("Honda", "Rojo", 2500);
$auto5 = new Auto("Ford", "Negro", 5000, new DateTime());


$auto3->AgregarImpuesto(1500);
$auto4->AgregarImpuesto(1500);
$auto5->AgregarImpuesto(1500);

$resultadoSuma = Auto::Add($auto1, $auto2);

if($auto1->Equals($auto2))
{
    echo "Los autos 1 y 2 son iguales <br>";
}
else
{
    echo "Los autos 1 y 2 no son iguales <br>";
}

if($auto1->Equals($auto5))
{
    echo "Los autos 1 y 5 son iguales <br>";
}
else
{
    echo "Los autos 1 y 5 no son iguales <br>";
}

echo "- AUTOS IMPARES - <br>";
Auto::MostrarAuto($auto1);
Auto::MostrarAuto($auto3);