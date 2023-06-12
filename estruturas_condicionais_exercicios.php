<?php
// Questão 1
echo "1. Crie um programa que verifica se um número é par ou ímpar. O usuário deve inserir o número, e o programa deve exibir a mensagem correspondente.\n";

$num = 10;

if ($num % 2 == 0) {
    echo "O número é par.\n";
} else {
    echo "O número é ímpar.\n";
}

// Questão 2
echo "\n2. Faça um programa que recebe a idade de uma pessoa e verifica se ela é maior de idade ou não.\n";

$idade = 20;

if ($idade >= 18) {
    echo "Você é maior de idade.\n";
} else {
    echo "Você é menor de idade.\n";
}

// Questão 3
echo "\n3. Crie um programa que solicita o nome e a senha de um usuário. Se o nome for 'admin' e a senha for '12345', exiba a mensagem 'Acesso concedido'. Caso contrário, exiba a mensagem 'Acesso negado'.\n";

$nome = "admin";
$senha = "12345";

if ($nome == "admin" && $senha == "12345") {
    echo "Acesso concedido.\n";
} else {
    echo "Acesso negado.\n";
}

// Questão 4
echo "\n4. Crie um programa que solicita o ano de nascimento de uma pessoa e informa se ela já atingiu a maioridade ou quando ela irá atingir (considerando a maioridade a partir de 18 anos).\n";

$anoNascimento = 1995;
$anoAtual = date("Y");
$idade = $anoAtual - $anoNascimento;

if ($idade >= 18) {
    echo "Você já atingiu a maioridade.\n";
} else {
    echo "Você irá atingir a maioridade em " . (18 - $idade) . " anos.\n";
}

// Questão 5
echo "\n5. Faça um programa que verifica se um número é positivo, negativo ou igual a zero.\n";

$num = -5;

if ($num > 0) {
    echo "O número é positivo.\n";
} elseif ($num < 0) {
    echo "O número é negativo.\n";
} else {
    echo "O número é zero.\n";
}

// Questão 6
echo "\n6. Crie um programa que verifica se um número é divisível por 3 e por 5 ao mesmo tempo.\n";

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "O número é divisível por 3 e por 5.\n";
} else {
    echo "O número não é divisível por 3 e por 5 simultaneamente.\n";
}

// Questão 7
echo "\n7. Faça um programa que solicita as notas de três provas de um aluno e calcula a média. Se a média for maior ou igual a 7, exiba a mensagem 'Aprovado'. Caso contrário, exiba a mensagem 'Reprovado'.\n";

$nota1 = 7;
$nota2 = 8;
$nota3 = 6;
$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    echo "Aprovado.\n";
} else {
    echo "Reprovado.\n";
}

// Questão 8
echo "\n8. Crie um programa que recebe a idade de uma pessoa e informa em qual categoria ela se encontra: 'infantil' (até 10 anos), 'juvenil' (entre 11 e 17 anos) ou 'adulto' (a partir de 18 anos).\n";

$idade = 12;

if ($idade <= 10) {
    echo "Categoria: infantil\n";
} elseif ($idade >= 11 && $idade <= 17) {
    echo "Categoria: juvenil\n";
} else {
    echo "Categoria: adulto\n";
}

// Questão 9
echo "\n9. Faça um programa que verifica se um ano é bissexto. Um ano é bissexto se for divisível por 4, mas não por 100, exceto se for divisível por 400.\n";

$ano = 2024;

if ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0)) {
    echo "O ano é bissexto.\n";
} else {
    echo "O ano não é bissexto.\n";
}

// Questão 10
echo "\n10. Crie um programa que verifica se uma palavra é um palíndromo, ou seja, se pode ser lida da mesma forma tanto da esquerda para a direita quanto da direita para a esquerda (desconsiderando espaços e diferenças entre letras maiúsculas e minúsculas).\n";

$palavra = "arara";
$palavraInvertida = strrev($palavra);

if (strtolower($palavra) == strtolower($palavraInvertida)) {
    echo "A palavra é um palíndromo.\n";
} else {
    echo "A palavra não é um palíndromo.\n";
}
