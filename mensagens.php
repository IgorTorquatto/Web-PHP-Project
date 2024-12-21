<?php

session_start();

//Se os dados do usuário não estiverem disponíveis na sessão encaminhe-o para a página do formulário
if(!isset($_SESSION['dados'])){
    header('Location: index.html');
    exit;
}

$dados = $_SESSION['dados'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/icons8-favicon-48.png" type="image/x-icon">
</head>
<body>
    <header class="container-fluid bg-primary d-flex justify-content-center p-3">

        <h1 class="text-white">Dados</h1>

    </header>

    <section class="container mt-5">

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Chaves</th>
                    <th scope="col">Dados do usuário</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>E-mail</td>
                    <td><?php echo htmlspecialchars($dados['email']); ?></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><?php echo htmlspecialchars($dados['password']); ?></td>
                </tr>
                <tr>
                    <td>Assunto</td>
                    <td><?php echo htmlspecialchars($dados['assunto']); ?></td>
                </tr>
                <tr>
                    <td>Mensagem</td>
                    <td><?php echo nl2br(htmlspecialchars($dados['mensagem'])); ?></td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <button id="logoutButton" class="btn btn-danger">Desconectar</button>
        </div>

    </section>

    <footer id="rodape" class="bg-body-tertiary text-center text-lg-start fixed-bottom">

        <div class="text-center p-3 bg-dark text-white">
          © 2025 Copyright:
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./logout.js"></script>
</body>
</html>