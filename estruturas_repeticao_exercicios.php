<?php
// Questão 1
echo "1. Escreva um programa que exiba os números de 1 a 10 usando um loop while.\n";
$contador = 1;

while ($contador <= 10) {
    echo $contador . " ";
    $contador++;
}

// Questão 2
echo "\n\n2. Faça um programa que imprima a tabuada do 5 usando um loop for.\n";

for ($i = 1; $i <= 10; $i++) {
    $resultado = 5 * $i;
    echo "5 x " . $i . " = " . $resultado . "\n";
}

// Questão 3
echo "\n3. Escreva um programa que exiba os números pares de 1 a 20 usando um loop do-while.\n";
$numero = 2;

do {
    echo $numero . " ";
    $numero += 2;
} while ($numero <= 20);

// Questão 4
echo "\n\n4. Faça um programa que calcule a soma dos números de 1 a 100 usando um loop for.\n";
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo "A soma dos números de 1 a 100 é: " . $soma . "\n";

// Questão 5
echo "\n5. Escreva um programa que exiba a sequência de Fibonacci até o décimo termo usando um loop while.\n";
$termo1 = 0;
$termo2 = 1;
$contador = 1;

while ($contador <= 10) {
    echo $termo1 . " ";
    $proximoTermo = $termo1 + $termo2;
    $termo1 = $termo2;
    $termo2 = $proximoTermo;
    $contador++;
}

// Questão 6
echo "\n\n6. Faça um programa que exiba os múltiplos de 3 de 0 a 30 usando um loop for.\n";

for ($i = 0; $i <= 30; $i += 3) {
    echo $i . " ";
}
