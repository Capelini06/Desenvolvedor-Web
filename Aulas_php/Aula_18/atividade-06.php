<?php

$lado1 = (int) readline("Insira um lado: ");
$lado2 = (int) readline("Insira um segundo lado: ");
$lado3 = (int) readline("Insira um terceiro lado: ");

if (
    ($lado1 + $lado2 >= $lado3) ||
    ($lado3 + $lado2 >= $lado1) ||
    ($lado1 + $lado3 >= $lado2)
) {
    echo "Triangulo valido\n";
    echo "Classificação: ";
    if ($lado1 == $lado2 && $lado3 == $lado1) {
        echo "Triangulo equilatero";
    } else if (
        ($lado1 == $lado2 && $lado3 != $lado1) ||
        ($lado3 == $lado2 && $lado1 != $lado3) ||
        ($lado1 == $lado3 && $lado2 != $lado1)
    ) {
        echo "Triangulo Isósceles";
    } else if (($lado1 != $lado2) && ($lado2 != $lado3) && ($lado1 != $lado3)) {
        echo "Triangulo Escaleno";
    }
} else {
    echo "Triangulo invalido";
}


