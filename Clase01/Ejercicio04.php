<?php
/*
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.

Costanza Lucas
*/
$operador = '/';
$op1 = 2;
$op2 = 2;
switch($operador)
{
    case '+':
        echo "El resultado de la suma es: ", $op1 + $op2;
        break;
    case '-':
        echo "El resultado de la resta es: ", $op1 - $op2;
        break;
    case '/':
        if($op2 == 0)
            echo "No se puede dividir por 0";
        else
            echo "El resultado de la división es: ", $op1 / $op2;
        break;
    case '*':
        echo "El resultado de la multiplicación es: ", $op1 * $op2;
        break;
}
?>