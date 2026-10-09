<?php

$codigo = 50;
$contador = 0;

while (true){
    $n = (int) readline("Tente a senha: ");
    if ($n == $codigo){
        break;
    }
    else {
        if($n > $codigo){
            echo "MENOR\n";
        } else if ($n < $codigo){
            echo "MAIOR\n";
        }
        $contador++;
    }
}

if ($contador <=3){
    echo "Exclente";
} else if ($contador >3 && $contador <=7){
    echo "Bom";
} else {
    echo "Tente novamente";
}