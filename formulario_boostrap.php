<!DOCTYPE html>
<html>

<head>
    <title>Minha Página</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Minha Página</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Estruturas de Repetição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Estruturas Condicionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Exercícios de Estruturas de Repetição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Exercícios de Estruturas Condicionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Formulário em Bootstrap</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Conteúdo -->
    <div class="container">
        <h1>Página Inicial</h1>
        <p>Bem-vindo à minha página!</p>
    </div>
    <div class="container">
        <h1>Formulário de Contato</h1>
        <form>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o seu nome">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" placeholder="Digite o seu e-mail">
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea class="form-control" id="mensagem" rows="5" placeholder="Digite a sua mensagem"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Rodapé -->
    <footer class="bg-light text-center py-3">
        <p>Todos os direitos reservados &copy; 2023</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>