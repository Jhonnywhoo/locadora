<?php 
include 'conexao.php';
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
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="#filmes">Filmes</a>
            <a href="#contato">Contato</a>
            <a href="#"><Button class='login'>Log-in</Button></a>
        </nav>
    </header>

    <div class="container">

        <h1>Cadastro de Filmes</h1>

        <form action="insert.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="genero">Gênero:</label>
            <input type="text" id="genero" name="genero" required>
            <label for="ano">Ano:</label>
            <input type="text" id="ano" name="ano" required>
            <hr>
            <button type="submit">Cadastrar</button>
        </form>

        <h2>Lista de Filmes</h2>

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

            // Consulta para obter os alunos
            $sql = "SELECT ID, Nome, Genero, Ano FROM filmes";
            $result = mysqli_query($conn, $sql);
            
            // Verificar se existem resultados
            if (mysqli_num_rows($result) > 0) {
                
                // Exibir cada linha da tabela
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row["ID"] . "</td>
                            <td>" . $row["Nome"] . "</td>
                            <td>" . $row["Genero"] . "</td>
                            <td>" . $row["Ano"] . "</td>
                            <td>
                            <a href='edit.php?ID=".$row["ID"]."' >Editar</a>
                            <a class='delete-button' href='delete.php?ID=".$row["ID"]."' >Deletar</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum filme cadastrado</td></tr>";
            }
            ?>
            </tbody>
        </table> 
    </div>
</body>
</html>
