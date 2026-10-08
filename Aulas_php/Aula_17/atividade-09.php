<?php
$convidados = [];

for($i = 1; $i <= 5; $i++){
    $convidado = readline("Insira o nome de um convidado: \n");
    $convidados[] = $convidado;
}

for ($i = 0; $i < count($convidados); $i++){
    echo "Convidado: $convidados[$i]\n";
}

echo "\n";

echo "Primeiro convidado: $convidados[0]\n";
echo "Ultimo convidado: " . array_last($convidados) . "\n";
echo "Total de convidados: " . count($convidados);

echo "\n";

$remocao = readline("Insira o nome de um convidado a ser removido: ");
$posicao = array_search($remocao, $convidados);
if ($posicao !== false){
    array_splice($convidados, $posicao, 1);
}

for ($i = 0; $i < count($convidados); $i++){
    echo "Convidado: $convidados[$i]\n";
}
