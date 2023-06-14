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
        <div class="row">
            <div class="col">
                <div class="produto">
                    <img src="imagem/dota2.jpg" class="produtos">
                    <div class="nome-produto">Dota 2</div>
                </div>
            </div>
            <div class="col">
                <div class="produto">
                    <img src="imagem/leftfordead.jpg" class="produtos">
                    <div class="nome-produto">Left For Dead 2</div>
                </div>
            </div>
            <div class="col">
                <div class="produto">
                    <img src="imagem/phasmophobia.jpg" class="produtos">
                    <div class="nome-produto">Phasmophobia</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="produto">
                    <img src="imagem/TheLegendofZelda.avif" class="produtos">
                    <div class="nome-produto">The Legend of Zelda: Breath of the Wild</div>
                </div>
            </div>
            <div class="col">
                <div class="produto">
                    <img src="imagem/valhala.webp" class="produtos">
                    <div class="nome-produto">Assassin's Creed Valhalla</div>
                </div>
            </div>
            <div class="col">
                <div class="produto">
                    <img src="imagem/stardew.jpg" class="produtos">
                    <div class="nome-produto">Stardew Valley</div>
                </div>
            </div>
        </div>
    </div>

    <?php include('components/rodape.php'); ?>
</body>

</html>