<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_completo = $_POST['nome_completo'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];
    $genero = isset($_POST['genero']) ? $_POST['genero'] : 'Não informado';
    $cor_favorita = $_POST['cor_favorita'];
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Recebidas</title>
    <link rel="stylesheet" href="server-style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cadastro Recebido</h1>
        <nav class="menu">
            <a href="index.html">Formulário</a>
            <a href="agradecimento.html">Agradecimento</a>
        </nav>
    </header>

    <div class="container">
        <h1>Informações Enviadas</h1>
        <div class="main">
            <p><strong>Nome Completo:</strong> <?= htmlspecialchars($nome_completo) ?></p>
            <p><strong>Matrícula:</strong> <?= htmlspecialchars($matricula) ?></p>
            <p><strong>E-mail:</strong> <?= htmlspecialchars($email) ?></p>
            <p><strong>Senha:</strong> <?= str_repeat('*', strlen($senha)) ?></p>
            <p><strong>Data de Nascimento:</strong> <?= htmlspecialchars($data_nascimento) ?></p>
            <p><strong>Telefone:</strong> <?= htmlspecialchars($telefone) ?></p>
            <p><strong>Gênero:</strong> <?= htmlspecialchars($genero) ?></p>
            <p><strong>Cor Favorita:</strong> <span style="background-color: <?= htmlspecialchars($cor_favorita) ?>; padding: 5px 20px; color: #fff;"><?= htmlspecialchars($cor_favorita) ?></span></p>
        </div>

        <div class="button">
            <a href="index.html">Voltar ao Formulário</a>
        </div>
    </div>

    <footer>
        <p>IFRN campus Santa Cruz / Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p> 
        <ul>
            <li>Grazielly Teixeira Rodrigues</li>
            <li>Lohanna Cauany Bezerra dos Santos</li>
            <li>Maria Clara Dantas de Souza</li>
        </ul>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <?php
    print_r($_POST)
    ?>
</body>
</html>