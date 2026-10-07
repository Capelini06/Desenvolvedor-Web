<?php

$nomes = ["Carlos", "Eduardo", "Marcela", "Marcio", "Leticia"];
$presentes = 0;
$ausentes = 0;
$invalido = 0;
$presenca = "";

foreach ($nomes as $nome){
        $chamada = readline("O aluno $nome esta presente(S/N): ");
        if ($chamada == "S" || $chamada == "s"){
            $presentes++;
            $presenca = "Presente";
        }elseif ($chamada == "N" || $chamada == "n") {
            $ausentes++;
            $presenca = "Ausente";
        } else {
            $invalido++;
            $presenca = "Invalido";
        }
        $alunos[] = [
            'nome' => $nome,
            'presenca' => $presenca,
        ];
    }

    echo "==============================================================";
    foreach ($alunos as $aluno){
        echo $aluno['nome'] . ":" . $aluno['presenca'] . "\n";
    }
    echo "==============================================================";
    echo "Alunos presentes: $presentes\n";
    echo "Alunos ausentes: $ausentes\n";
    echo "Comandos invalidos: $invalido\n";
    echo "==============================================================";