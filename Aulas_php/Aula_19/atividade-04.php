<?php

$nomes = ["Ana", "Bruno", "Carla", "Daniel", "Eduardo"];
$aprovados = 0;
$reprovados = 0;

for($i = 0; $i < count($nomes); $i++){
    $notas = readline("Insira a nota do aluno $nomes[$i]: ");
    if($notas >= 7){
        $aprovados++;
    } else {
        $reprovados++;
    }
}

echo "Alunos aprovados: $aprovados \n";
echo "Alunos reprovados: $reprovados \n";
