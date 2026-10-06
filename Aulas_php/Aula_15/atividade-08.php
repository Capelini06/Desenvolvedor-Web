<?php

$cont = 0;
$soma = 0;
$bool = true;
while($bool) {
    $nota = (int) readline("Insira a nota (0 para sair): ");
    if ($nota == 0){
        $bool = false;
    }
    $cont++;
    $soma = $soma + $nota;
}
$media = $soma/$cont;
echo "A media é: $media";