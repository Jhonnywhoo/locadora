<?php 
include 'conexao.php';

$id = $_GET['ID'];
$querySelect = 'SELECT Nome,Genero,Ano from filmes where ID = '.$id;
$result = mysqli_query($conn,$querySelect);
$result = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Filmes</title>
    <link rel="stylesheet" href="style_tabela.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8b0455432d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
            <a href="#"><i class="fa-solid fa-film"></i></a>
            <a href="#contato"><i class="fa-solid fa-comment"></i></a>
            <a href="#"><Button class='login'>Log-in</Button></a>
        </nav>
    </header>



    <div class="container">
        <h1>Editar filme</h1>

        <form action="update.php" method="POST">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" value="<?php echo $id; ?>" >
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $result["Nome"]; ?>" required>
            <label for="curso">Gênero:</label>
            <input type="text" id="genero" name="genero" value="<?php echo $result["Genero"]; ?>" required>
            <label for="curso">Ano:</label>
            <input type="text" id="ano" name="ano" value="<?php echo $result["Ano"]; ?>" required>
            <hr>
            <button type="submit">Editar</button>
        </form>
    </div>
</body>
</html>
