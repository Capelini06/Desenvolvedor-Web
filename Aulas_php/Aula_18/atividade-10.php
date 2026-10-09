<?php
$num = (int) readline("Insira um numero: ");

for($i = 1; $i <= 10; $i++){
    $media = $num * $i;
    if (($num * $i)%2==0){
        echo "$num * $i = $media (par) \n";
    } else {
        echo "$num * $i = $media (impar) \n";
    }
}