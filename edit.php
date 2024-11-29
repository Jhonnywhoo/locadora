<?php 
include 'conexao.php';

if (isset($_POST['id'])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $ano = $_POST["ano"];

    $sqlUpdate = "UPDATE filmes SET Nome = '$nome', Genero = '$genero', Ano = '$ano' WHERE ID = $id";
    
    if (mysqli_query($conn, $sqlUpdate)) {
        $mensagem = "Filme atualizado com sucesso!";
    } else {
        $erro = mysqli_error($conn);
        $mensagem = "Erro ao atualizar o registro: $erro";
    }
    echo "<script>alert('$mensagem'); window.location.href='tabela.php';</script> ";
}

$id = $_GET['ID'];
$querySelect = "SELECT Nome, Genero, Ano FROM filmes WHERE ID = $id";
$result = mysqli_query($conn, $querySelect);
$result = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Filmes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/mini-logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8b0455432d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
            <a href="tabela.php"><i class="fa-solid fa-film"></i></a>
            <a href="https://api.whatsapp.com/send?phone=5511942757313&text=Ol%C3%A1,%20SUUPER8."><i class="fa-solid fa-comment"></i></a>
        </nav>
    </header>

    <div class="container-tabela">
        <h2>Editar filme</h2>

        <form action="" method="POST">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" value="<?php echo $id; ?>" readonly>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $result["Nome"]; ?>" required>
            <label for="genero">Gênero:</label>
            <input type="text" id="genero" name="genero" value="<?php echo $result["Genero"]; ?>" required>
            <label for="ano">Ano:</label>
            <input type="text" id="ano" name="ano" value="<?php echo $result["Ano"]; ?>" required>
            <hr>
            <button type="submit">Editar</button>
        </form>
    </div>
</body>
</html>
