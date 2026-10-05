<?php

$escolha = (int) readline("Insira um numero de 1 a 3: ");

switch ($escolha){
    case 1:
        echo "Cadastrar";
        break;
    case 2:
        echo "Editar";
        break;
    case 3:
        echo "Excluir";
        break;
    default:
        echo "Coloque um numero valido (de 1 a 3)";
        break;
}