<?php 
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUUPER8</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8b0455432d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/mini-logo.png" type="image/x-icon">
</head>
<body>
    <header>
        <nav>
            <a href="#"><i class="fa-solid fa-house"></i></a>
            <a href="tabela.php"><i class="fa-solid fa-film"></i></a>
            <a href="https://api.whatsapp.com/send?phone=5511942757313&text=Ol%C3%A1,%20SUUPER8."><i class="fa-solid fa-comment"></i></a>
        </nav>
    </header>
    <div id="main">
    <div class="container">
        <section class="conteudo-grid" id="grid-conteudo">
            <div class="grid">
                <div><img class="logo" src="img/logo.png" alt="Logo"></div>
                <div class="conteudo">
                    <h1>Parece <strong style="color: yellow;">PULP FICTION</strong></h1>
                    <p>com um pouco de Cães de Aluguel; aqui<br>é possível adicionar, editar e deletar a lista de filmes disponíveis no banco de dados da SUUPER8 Locadora!</p>
                    <a href="tabela.php"><button class="botao-conteudo">Exibir tabela</button></a>
                </div>
            </div>
        </section>
    </div>
</div>
    <footer id="footer">
        <h5>Todos os direitos reservados © 2024</h5>
    </footer>
    <script src="components/script.js"></script>

</body>
</html>
