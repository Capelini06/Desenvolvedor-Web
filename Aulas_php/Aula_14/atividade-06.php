<?php

$vogal = readline("Insira uma vogal: ");

switch ($vogal) {
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        echo "É vogal.";
        break;
    default:
        echo "Não é vogal";
        break;
}