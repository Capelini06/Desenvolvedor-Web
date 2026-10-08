<?php

$alunos = ["Bruno", "Carlos", "Daniela", "Eduardo"];

echo "$alunos[0]\n";
echo "$alunos[1]\n";
echo "$alunos[3]\n";

echo "=====================================================\n";
$alunos[0] = "Beatriz";
$alunos[] = "Filipe";
print_r($alunos);

echo "=====================================================\n";

array_splice($alunos, 0, 0, "Ana");

echo "=====================================================\n";

echo count($alunos) . "\n";

echo "=====================================================\n";

for ($i = 0; $i < count($alunos); $i++){
    echo "$alunos[$i]\n";
}

echo "=====================================================\n";

echo "Array_search procura por um valor dentro do vetor. E array_splice tambem pode ser usado para retirar um valor";
$posicao = array_search("Filipe", $alunos);
if ($posicao !== false){
    array_splice($alunos, $posicao, 1);
}
print_r($alunos);

echo "=====================================================\n";

echo "Array_pop retira o item da ultima posição\n";
array_pop($alunos);
print_r($alunos);
echo "=====================================================\n";