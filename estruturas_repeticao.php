<!DOCTYPE html>
<html>

<head>
    <title>Nossos Produtos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('components/menu.php'); ?>

    <div class="container">

        <div class="loop-examples">
            <h2>Exemplos de Loops</h2>

            <div class="loop-section">
                <h3>While Loop</h3>
                <?php
                $contador = 1;

                while ($contador <= 5) {
                    echo "Contagem: " . $contador . "<br>";
                    $contador++;
                }
                ?>
            </div>

            <div class="loop-section">
                <h3>Do-While Loop</h3>
                <?php
                $contador = 1;

                do {
                    echo "Contagem: " . $contador . "<br>";
                    $contador++;
                } while ($contador <= 5);
                ?>
            </div>

            <div class="loop-section">
                <h3>For Loop</h3>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo "Contagem: " . $i . "<br>";
                }
                ?>
            </div>

            <div class="loop-section">
                <h3>Foreach Loop</h3>
                <?php
                $nomes = array("João", "Maria", "Pedro", "Ana");

                foreach ($nomes as $nome) {
                    echo "Nome: " . $nome . "<br>";
                }
                ?>
            </div>

            <div class="loop-section">
                <h3>Break</h3>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    if ($i == 6) {
                        break;
                    }
                    echo "Número: " . $i . "<br>";
                }
                ?>
            </div>

            <div class="loop-section">
                <h3>Continue</h3>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    if ($i == 3) {
                        continue;
                    }
                    echo "Número: " . $i . "<br>";
                }
                ?>
            </div>


        </div>
    </div>

    <?php include('components/rodape.php'); ?>
</body>

</html>