<?php
$notas = [];
$soma = 0;
$maior = 0;
$menor = 100;

for ($i = 1; $i <= 5; $i++){
    $nota = (float) readline("Insira uma nota: ");
    $notas[] = $nota;
    $soma = $soma + $nota;
        if($nota > $maior){
        $maior = $nota;
    }
    if ($nota < $menor) {
        $menor = $nota;
    }
}

$media = $soma / count($notas);

echo "NOTAS:\n";
for ($i = 0; $i < count($notas); $i++){
    echo "$notas[$i]\n";
}
echo "Media: $media\n";
echo "Maior nota: $maior\n";
echo "Menor nota: $menor\n";
if($media >= 7){
    echo "Aprovado";
} else {
    echo "Reprovado";
}

