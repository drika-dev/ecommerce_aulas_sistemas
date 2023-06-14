<!DOCTYPE html>
<html>

<head>
    <title>Nossos Produtos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('components/menu.php'); ?>
    <div class="container">
        <h1>Nossos Produtos</h1>

        <div class="code-block">
            <h2>Questão 1</h2>
            <p>Escreva um programa que exiba os números de 1 a 10 usando um loop while.</p>
            <pre>
                <code>
            &lt;?php
            $contador = 1;

            while ($contador <= 10) {
                echo $contador . " ";
                $contador++;
            }
            ?&gt;
                </code>
            </pre>
        </div>

        <div class="code-block">
            <h2>Questão 2</h2>
            <p>Faça um programa que imprima a tabuada do 5 usando um loop for.</p>
            <pre>
                <code>
            &lt;?php

            for ($i = 1; $i <= 10; $i++) {
                $resultado = 5 * $i;
                echo "5 x " . $i . " = " . $resultado . "\n";
            }
            ?&gt;
                </code>
            </pre>
        </div>

        <div class="code-block">
            <h2>Questão 3</h2>
            <p>Escreva um programa que exiba os números pares de 1 a 20 usando um loop do-while.</p>
            <pre>
                <code>
            &lt;?php
            $numero = 2;

            do {
                echo $numero . " ";
                $numero += 2;
            } while ($numero <= 20);
            ?&gt;
                </code>
            </pre>
        </div>

        <div class="code-block">
            <h2>Questão 4</h2>
            <p>Faça um programa que calcule a soma dos números de 1 a 100 usando um loop for.</p>
            <pre>
                <code>
            &lt;?php
            echo "\n\n4. \n";
            $soma = 0;

            for ($i = 1; $i <= 100; $i++) {
                $soma += $i;
            }

            echo "A soma dos números de 1 a 100 é: " . $soma . "\n";
            ?&gt;
                </code>
            </pre>
        </div>

        <div class="code-block">
            <div class="exercise">
                <h2>Questão 5</h2>
                <p> Escreva um programa que exiba a sequência de Fibonacci até o décimo termo usando um loop while</p>
                <pre>
                <code>
                 &lt;?php
                    $termo1 = 0;
                    $termo2 = 1;
                    $contador = 1;

                    while ($contador <= 10) { echo $termo1 . " " ; 
                        $proximoTermo=$termo1 + $termo2; 
                        $termo1=$termo2; 
                        $termo2=$proximoTermo; 
                        $contador++; ]
                    } 
                ?&gt; </code>
                    </pre>
            </div>
        </div>
        <div class="code-block">
            <div class="exercise">
                <h2>Questão 6</h2>
                <p> Faça um programa que exiba os múltiplos de 3 de 0 a 30 usando um loop for.</p>
                <pre>
                <code>
            &lt;?php

            for ($i = 0; $i <= 30; $i += 3) {
                echo $i . " ";
            }
            ?&gt;
                </code>
            </pre>
            </div>
        </div>

        <?php include('components/rodape.php'); ?>
</body>

</html>