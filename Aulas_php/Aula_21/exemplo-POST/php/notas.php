<?php

if (
    isset($_POST["aluno"]) &&
    isset($_POST["nota1"]) &&
    isset($_POST["nota2"]) &&
    isset($_POST["nota3"])
) {
    $aluno = htmlspecialchars($_POST["aluno"]);
    $n1 = $_POST["nota1"];
    $n2 = $_POST["nota2"];
    $n3 = $_POST["nota3"];

    if ($n1 === "" && $n2 === "" && $n3 === "") {
        echo "<p>Prencha as três notas.</p>";
    } else {
        $n1 = (float) $n1;
        $n2 = (float) $n2;
        $n3 = (float) $n3;

        $media = ($n1 + $n2 + $n3) / 3;
        if($media >=7){
            $situacao = "aprovado";
        }elseif($media >= 5){
            $situacao = "Exame final";
        } else {
            $situacao = "Reprovado";
        }

        echo "<h1>BOLETIM</h1>";
        echo "<h2><b>ALUNO:</b>$aluno</h2>";
        echo "<p>Média: " . number_format($media, 1, ",", ".") . "</p>";
        echo "<p>Situação: $situacao</p>";
    } 
} else {
    echo "<p>Nenhum dado recebido. Prencha o formulario.</p>";
}
    echo "<p><a href='../html/notas.html'>VOLTAR</a></p>";