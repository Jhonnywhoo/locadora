<?php
include 'conexao.php';

$id = $_GET['ID'];
$sql = "DELETE FROM filmes WHERE ID = ".$id;

if (mysqli_query($conn, $sql)) {
    echo "Exclusão do registro realizada com sucesso!";
    print_r("<br><a href='index.php'>Voltar</a>");
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conn);
}

