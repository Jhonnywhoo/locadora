<?php 
include 'conexao.php';

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $sql = "DELETE FROM filmes WHERE ID = ".$id;

    if (mysqli_query($conn, $sql)) {
        $mensagem = "Exclusão do registro realizada com sucesso!";
    } else {
        $mensagem = "Erro ao deletar filme: " . mysqli_error($conn);
    }

    echo "<script>alert('$mensagem');</script>";
}

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO filmes (Nome, Genero, Ano) VALUES ('$nome', '$genero','$ano')";

    if (mysqli_query($conn, $sql)) {
        $mensagem = "Filme registrado com sucesso!";
    } else {
        $mensagem = "Erro ao registrar filme: " . mysqli_error($conn);
    }

    echo "<script>alert('$mensagem');</script>";
}

$sql = "SELECT ID, Nome, Genero, Ano FROM filmes";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filmes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/mini-logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8b0455432d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
            <a href="#"><i class="fa-solid fa-film"></i></a>
            <a href="https://api.whatsapp.com/send?phone=5511942757313&text=Ol%C3%A1,%20SUUPER8."><i class="fa-solid fa-comment"></i></a>
        </nav>
    </header>
<div id="main">
    <div class="container-tabela">
        <section class="conteudo-grid" id="grid-conteudo">
            <div class="grid">
                <div id="logo-tabela"><img class="logo" src="img/logo.png" alt="Logo">
                </div>
                <div>
                    <h2>Cadastrar filme</h2>
                    <form class="cadastro" action="" method="POST">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required>
                        <label for="genero">Gênero:</label>
                        <input type="text" id="genero" name="genero" required>
                        <label for="ano">Ano:</label>
                        <input type="text" id="ano" name="ano" required>
                        <hr>
                        <button type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
        <div class="lista">
            <h2>Lista de Filmes</h2>
            <a href="#footer" id="final-lista"><button>Final da lista</button></a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Genero</th>
                        <th>Ano</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr class='registros'>
                                    <td>" . $row["ID"] . "</td>
                                    <td>" . $row["Nome"] . "</td>
                                    <td>" . $row["Genero"] . "</td>
                                    <td>" . $row["Ano"] . "</td>
                                    <td>
                                        <a href='edit.php?ID=" . $row["ID"] . "'>Editar</a>
                                        <a class='delete-button' href='?ID=" . $row["ID"] . "'>Deletar</a>
                                    </td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Nenhum filme cadastrado</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    <footer id="footer">
        <h5>Todos os direitos reservados © 2024</h5>
    </footer>
    <script src="components/script.js"></script>

</body>
</html>
