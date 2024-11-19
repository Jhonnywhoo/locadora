<?php 
include 'conexao.php';

$id = $_GET['ID'];
$querySelect = 'SELECT Nome,Genero,Ano from alunos where ID = '.$id;
$result = mysqli_query($conn,$querySelect);
$result = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Alunos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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
