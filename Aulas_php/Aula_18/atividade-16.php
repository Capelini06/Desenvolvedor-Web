<?php

$qta = (int) readline("Insira a quantidade de alunos para inserir: ");
$notas = [];
$soma = 0;
$aprovados = 0;

for($i = 1; $i <= $qta; $i++){
    $nota = (float)readline("Insira a nota do aluno: ");
    $notas[] = $nota;
    $soma+= $nota;
}

$media = $soma / count($notas);

for($i = 0; $i < count($notas); $i++){
    if($notas[$i]>$media){
        $aprovados++;
    }
}

echo "Media sala: " . number_format($media, 2, ",", ".") . "\n";
echo "Notas acima da media: {$aprovados}\n";