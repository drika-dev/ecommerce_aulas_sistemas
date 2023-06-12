<?php
// Exemplo de if-else
$idade = 25;

if ($idade >= 18) {
    echo "Você é maior de idade.\n";
} else {
    echo "Você é menor de idade.\n";
}

// Exemplo de if-elseif-else
$nota = 75;

if ($nota >= 90) {
    echo "Parabéns! Sua nota é A.\n";
} elseif ($nota >= 80) {
    echo "Ótimo! Sua nota é B.\n";
} elseif ($nota >= 70) {
    echo "Bom! Sua nota é C.\n";
} else {
    echo "Estude mais! Sua nota é D.\n";
}

// Exemplo de switch-case
$diaSemana = 3;

switch ($diaSemana) {
    case 1:
        echo "Hoje é segunda-feira.\n";
        break;
    case 2:
        echo "Hoje é terça-feira.\n";
        break;
    case 3:
        echo "Hoje é quarta-feira.\n";
        break;
    case 4:
        echo "Hoje é quinta-feira.\n";
        break;
    case 5:
        echo "Hoje é sexta-feira.\n";
        break;
    default:
        echo "Bom final de semana!\n";
}

// Exemplo de operador ternário
$idade = 20;
$status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";

echo "Status: " . $status . "\n";

// Exemplo de operador null coalescing
$nome = $_GET['nome'] ?? "Visitante";

echo "Olá, " . $nome . "\n";
