<?php 
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUUPER8 Locadora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="#">Home</a>
            <a href="tabela.php">Filmes</a>
            <a href="#contato">Contato</a>
            <a href="#"><Button class='botao'>Log-in</Button></a>
        </nav>
    </header>

    <div class="container">
        <section class="conteudo-grid" id="grid-conteudo">
            <div class="grid">
                <div><img class="logo" src="img/logo.png" alt="Logo"></div>
                <div class="conteudo-texto">
                    <h5>A melhor ferramenta</h5>
                    <p>para cadastrar os filmes da sua locadora!</p>
                    <p>Com nossa plataforma, é possível adicionar, editar e deletar os ítens do seu banco de dados com apenas um clique!</p>
                    <a href="tabela.php"><button class="botao">Exibir tabela</button></a>
                </div>
            </div>
        </section>
    </div>

    <br>
</body>
</html>
