<?php

function calcularMedia($nota1, $nota2, $nota3){
    return number_format(($nota1 + $nota2 + $nota3)/ 3, 2, ",", ".");
}

function mostrarMensagem(){
    echo "Bem vindo ao sistema!!\n";
}

$media = calcularMedia(7, 9.2, 5.45);

mostrarMensagem();
echo $media;