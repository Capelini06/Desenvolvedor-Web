<?php
$soma = 0;
$N = (int) readline("Quantas notas voce quer cadastrar a nota: ");

for($i = 1; $i <= $N; $i++){
    $nota = (float) readline("Insira a nota $i: ");

    $soma += $nota;
}

$media = $soma/$N;
echo "A media da turma é: $media";

