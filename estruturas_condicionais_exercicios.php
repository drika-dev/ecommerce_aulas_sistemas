<!DOCTYPE html>
<html>

<head>
    <title>Exercícios de Estruturas Condicionais</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('components/menu.php'); ?>

    <div class="container">
        <h1>Exercícios de Estruturas Condicionais</h1>

        <div class="exercise">
            <h2>Questão 1</h2>
            <p>Crie um programa que verifica se um número é par ou ímpar. O usuário deve inserir o número, e o programa deve exibir a mensagem correspondente.</p>
            <pre>
                <code>
            $num = 10;

            if ($num % 2 == 0) {
                echo "O número é par.";
            } else {
                echo "O número é ímpar.";
            }
              </code>
            </pre>
        </div>

        <div class="exercise">
            <h2>Questão 2</h2>
            <p>Faça um programa que recebe a idade de uma pessoa e verifica se ela é maior de idade ou não.</p>
            <pre>
                <code>
            $idade = 20;

            if ($idade >= 18) {
                echo "Você é maior de idade.";
            } else {
                echo "Você é menor de idade.";
            }
              </code>
            </pre>
        </div>

        <div class="exercise">
            <h2>Questão 3</h2>
            <p>Crie um programa que solicita o nome e a senha de um usuário. Se o nome for 'admin' e a senha for '12345', exiba a mensagem 'Acesso concedido'. Caso contrário, exiba a mensagem 'Acesso negado'.</p>
            <pre>
                <code>
            $nome = "admin";
            $senha = "12345";

            if ($nome == "admin" && $senha == "12345") {
                echo "Acesso concedido.";
            } else {
                echo "Acesso negado.";
            }
               </code>
            </pre>
        </div>

        <div class="exercise">
            <h2>Questão 4</h2>
            <p>Crie um programa que solicita o ano de nascimento de uma pessoa e informa se ela já atingiu a maioridade ou quando ela irá atingir (considerando a maioridade a partir de 18 anos).</p>
            <div class="code-box">
                <pre>
                <code>
            $anoNascimento = 1995;
            $anoAtual = date("Y");
            $idade = $anoAtual - $anoNascimento;

            if ($idade >= 18) {
                echo "Você já atingiu a maioridade.";
            } else {
                echo "Você irá atingir a maioridade em " . (18 - $idade) . " anos.";
            }
               </code>
            </pre>
            </div>
        </div>

        <div class="exercise">
            <h2>Questão 5</h2>
            <p>Faça um programa que verifica se um número é positivo, negativo ou igual a zero.</p>
            <pre>
                <code>
            $num = -5;

            if ($num > 0) {
                echo "O número é positivo.";
            } elseif ($num < 0) {
                echo "O número é negativo.";
            } else {
                echo "O número é zero.";
            }
              </code>
            </pre>
        </div>

        <div class="exercise">
            <h2>Questão 6</h2>
            <p>Crie um programa que verifica se um número é divisível por 3 e por 5 ao mesmo tempo.</p>
            <pre>
                <code>
            $num = 15;

            if ($num % 3 == 0 && $num % 5 == 0) {
                echo "O número é divisível por 3 e por 5.";
            } else {
                echo "O número não é divisível por 3 e por 5 simultaneamente.";
            }
              </code>
            </pre>
        </div>

        <div class="exercise">
            <h2>Questão 7</h2>
            <p>Faça um programa que solicita as notas de três provas de um aluno e calcula a média. Se a média for maior ou igual a 7, exiba a mensagem 'Aprovado'. Caso contrário, exiba a mensagem 'Reprovado'.</p>
            <pre>
                <code>
            $nota1 = 7;
            $nota2 = 8;
            $nota3 = 6;
            $media = ($nota1 + $nota2 + $nota3) / 3;

            if ($media >= 7) {
                echo "Aprovado.";
            } else {
                echo "Reprovado.";
            }
            ?>
        </div>

        <div class="exercise">
            <h2>Questão 8</h2>
            <p>Crie um programa que recebe a idade de uma pessoa e informa em qual categoria ela se encontra: 'infantil' (até 10 anos), 'juvenil' (entre 11 e 17 anos) ou 'adulto' (a partir de 18 anos).</p>
             <pre>
                <code>
            $idade = 12;

            if ($idade <= 10) {
                echo "Categoria: infantil";
            } elseif ($idade >= 11 && $idade <= 17) {
                echo "Categoria: juvenil";
            } else {
                echo "Categoria: adulto";
            }
            ?>
        </div>

        <div class="exercise">
            <h2>Questão 9</h2>
            <p>Faça um programa que verifica se um ano é bissexto. Um ano é bissexto se for divisível por 4, mas não por 100, exceto se for divisível por 400.</p>
             <pre>
                <code>
            $ano = 2024;

            if ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0)) {
                echo "O ano é bissexto.";
            } else {
                echo "O ano não é bissexto.";
            }
            ?>
        </div>

        <div class="exercise">
            <h2>Questão 10</h2>
            <p>Crie um programa que verifica se uma palavra é um palíndromo, ou seja, se pode ser lida da mesma forma tanto da esquerda para a direita quanto da direita para a esquerda (desconsiderando espaços e diferenças entre letras maiúsculas e minúsculas).</p>
             <pre>
                <code>
            $palavra = "arara";
            $palavraInvertida = strrev($palavra);

            if (strtolower($palavra) == strtolower($palavraInvertida)) {
                echo "A palavra é um palíndromo.";
            } else {
                echo "A palavra não é um palíndromo.";
            }
            ?>
        </div>

    </div>

    <?php include('components/rodape.php'); ?>
</body>

</html>