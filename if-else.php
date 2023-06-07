<?php
include('components/menu.php');

$numero1 = 10;
$numero2 = 30;

//IF
echo '<br/> Condicional IF';
if ($numero1 == 10) {
    echo '<br/> Número 1 é igual a 10.';
}
if ($numero2 == 20) {
    echo '<br/> Numero 2 é igual a 20.';
}
// IF AND ELSE
echo '<br/> Condicional IF and ELSE';
$eduardo = 17;

if ($eduardo >= 18) {
    echo "<br/> Maior de idade.";
} else {
    echo "<br/> Menor de idade.";
}
echo '<br/> Repetição FOR';
for ($i = 0; $i <= 10; $i++) {
    echo '<div id="minhadiv" class="minhadiv">Valor do indice' . $i . '<br/> </div> ';
}

echo '<br/> Repetição While<br/> ';
$indice = 0;
while($indice != 10){
    echo '<br/> Indice: '. $indice;
    $indice++;
}

echo '<br/> Escreva um programa que leia 3 notas e o número de faltas de um aluno, calcule a sua média e determine e
exiba a sua situação. Caso o aluno tenha mais de 10 faltas, ele está REPROVADO POR FALTA. Caso
contrário, estará REPROVADO se sua média for menor que 6.0 ou APROVADO se sua média for superior a
6.0.<br/> ';

$nota1 = 2;
$nota2 = 2;
$nota3 = 2;
$qtd_faltas = 10;
include('components/rodape.php');
?>