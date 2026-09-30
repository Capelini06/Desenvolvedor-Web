<?php

$prova1 = 7.3;
$prova2 = 4.9;
$prova3 = 6.8;
$prova4 = 8.7;
$media = ($prova1 + $prova2 + $prova3 + $prova4)/4;

echo"Media: ". number_format($media,2,",","."). "\n";

echo $media>=7;