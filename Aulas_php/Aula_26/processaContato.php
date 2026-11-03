<?php

// Verifica se o metodo é o esperado
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Envie o formulario pela página de contato<br>";
} else {

    if (!isset($_POST["nomeUsuario"], $_POST["emailUsuario"], $_POST["qtdFunc"])) {
        echo "Os campos não estão preenchidos<br>";
    } else {
        $nomeUsuario = trim($_POST["nomeUsuario"]);
        $emailUsuario = trim($_POST["emailUsuario"]);
        $qtdFunc = trim($_POST["qtdFunc"]);


        if (!filter_var($emailUsuario, FILTER_VALIDATE_EMAIL)) {
            echo "Email invalido<br>";
        } else {
            echo "Email valido<br>";
        }


        if ($qtdFunc === "" || !ctype_digit($qtdFunc)) {
            echo "Informe uma quantidade de funcionarios validas<br>";
        } else {
            $qtdFunc = (int) $qtdFunc;
            if ($qtdFunc < 1 || $qtdFunc > 100) {
                echo "Use um valor de 1 a 100<br>";
            } else {
                echo "Quantidade funcionarios: {$qtdFunc}<br>";
            }
        }

        echo "Ola {$nomeUsuario} <br>";
        echo "Já entramos em contato no email: {$emailUsuario}";
    }
}

