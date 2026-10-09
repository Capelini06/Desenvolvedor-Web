<?php

$nomes = ["Ana", "Bruno", "Carlos", "Denise", "Eduardo"];
$posicao = 0;
$achou = false;

$procura = readline("Insira um nome para procurar: ");
for($i = 0; $i < count($nomes); $i++){
    if ($procura == $nomes[$i]){
        $achou = true;
        $posicao = $i;
        break;
    }
}

if($posicao == true){
    echo "Nome encontrado na posição $posicao\n";
} else {
    echo "Nome não encontrado\n";
}
