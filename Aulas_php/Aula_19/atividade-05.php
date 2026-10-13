<?php

$nomes = ["Ana", "Bruna", "Carlos", "Donald", "Estevam"];
$encontrou = false;

$procura = readline("Qual nome voce quer procurar: ");

if ($procura != "") {
    for ($i = 0; $i < count($nomes); $i++) {
        if ($procura == $nomes[$i]) {
            echo "Nome encontrado no indice $i\n";
            $encontrou = true;
            break;
        }
    }
    if ($encontrou == false) {
        echo "Nome não encontrado";
    }
} else {
    echo "Nome vazio\n";
}
