<?php
// Exemplo de while loop
$contador = 1;

while ($contador <= 5) {
    echo "Contagem: " . $contador . "\n";
    $contador++;
}

// Exemplo de do-while loop
$contador = 1;

do {
    echo "Contagem: " . $contador . "\n";
    $contador++;
} while ($contador <= 5);

// Exemplo de for loop
for ($i = 1; $i <= 5; $i++) {
    echo "Contagem: " . $i . "\n";
}

// Exemplo de foreach loop
$nomes = array("João", "Maria", "Pedro", "Ana");

foreach ($nomes as $nome) {
    echo "Nome: " . $nome . "\n";
}

// Exemplo de break
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break;
    }
    echo "Número: " . $i . "\n";
}

// Exemplo de continue
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "Número: " . $i . "\n";
}
