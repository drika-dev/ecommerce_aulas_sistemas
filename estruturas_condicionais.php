<!DOCTYPE html>
<html>

<head>
    <title>Estruturas Condicionais</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('components/menu.php'); ?>
    <div class="container">
        <h1>Estruturas Condicionais</h1>

        <div class="code-block">
            <h2>Exemplo de if-else</h2>
            <pre>
&lt;?php
$idade = 25;

if ($idade &gt;= 18) {
    echo "Você é maior de idade.\n";
} else {
    echo "Você é menor de idade.\n";
}
?&gt;
            </pre>
        </div>

        <div class="code-block">
            <h2>Exemplo de if-elseif-else</h2>
            <pre>
&lt;?php
$nota = 75;

if ($nota &gt;= 90) {
    echo "Parabéns! Sua nota é A.\n";
} elseif ($nota &gt;= 80) {
    echo "Ótimo! Sua nota é B.\n";
} elseif ($nota &gt;= 70) {
    echo "Bom! Sua nota é C.\n";
} else {
    echo "Estude mais! Sua nota é D.\n";
}
?&gt;
            </pre>
        </div>

        <div class="code-block">
            <h2>Exemplo de switch-case</h2>
            <pre>
&lt;?php
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
?&gt;
            </pre>
        </div>

        <div class="code-block">
            <h2>Exemplo de operador ternário</h2>
            <pre>
&lt;?php
$idade = 20;
$status = ($idade &gt;= 18) ? "Maior de idade" : "Menor de idade";

echo "Status: " . $status . "\n";
?&gt;
            </pre>
        </div>

        <div class="code-block">
            <h2>Exemplo de operador null coalescing</h2>
            <pre>
&lt;?php
$nome = $_GET['nome'] ?? "Visitante";

echo "Olá, " . $nome . "\n";
?&gt;
            </pre>
        </div>
    </div>
    <?php include('components/rodape.php'); ?>
</body>

</html>