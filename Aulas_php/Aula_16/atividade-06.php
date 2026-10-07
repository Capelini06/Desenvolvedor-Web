<?php
$soma = 0;
$qta = (int) readline("Quantos alunos voce quer cadastrar a nota: ");

for($i = 1; $i <= $qta; $i++){
    $nota = (float) readline("Insira a nota: ");

    $soma += $nota;
}

$media = $soma/$qta;
echo "A media da turma é: $media";