<?php
$perfil = [];
$contador = (int) readline("Digite a quantidade de usuários que deseja cadastrar: ");
while ($contador > 0) {
    $nome = readline("Digite o seu nome: ");
    $sobrenome = readline("Digite o seu sobrenome: ");
    $nomeCompleto = $nome . " " . $sobrenome;

    $idade = (int) readline("Digite a sua idade: ");
    $altura = (float) readline("Digite a sua altura: ");
    $menorIdade = (bool) true;
    echo "==============================================================\n";

    if ($idade >= 18) {
        $menorIdade = false;
        $perfil[] = [
            "nome" => $nome,
            "sobrenome" => $sobrenome,
            "nomeCompleto" => $nomeCompleto,
            "idade" => $idade,
            "altura" => $altura,
            "menorIdade" => $menorIdade
        ];
    } else {
        echo "Menores de idade não podem se cadastrar \n";
    }

    $contador--;
}

echo "===========================RESULTADO============================\n";

for ($i = 0; $i < count($perfil); $i++) {
    echo "Nome: {$perfil[$i]['nome']} \n";
    echo "Sobrenome: {$perfil[$i]['sobrenome']} \n";
    echo "Nome Completo: {$perfil[$i]['nomeCompleto']} \n";
    echo "Idade: {$perfil[$i]['idade']} \n";
    echo "Altura: {$perfil[$i]['altura']} \n";
    echo "Menor de idade: " . ($perfil[$i]['menorIdade'] ? "Sim" : "Não") . "\n";
    echo "==============================================================\n";
}


// echo "{$nomeCompleto} \n";
// echo "{$idade} \n";
// echo "{$altura} \n";
// print_r ($menorIdade);

// var_dump($nome, $idade, $altura, $menorIdade);

// echo "=============================== \n";

// $num1 = "505";
// $num2 = "426";

// echo (int)$num1 + (int)$num2 . "\n";
// echo $num1 . $num2;

// echo "=============================== \n";

