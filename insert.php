<?php

include 'conexao.php';

$nome = $_POST['nome'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];

$sql = "INSERT INTO alunos (Nome, Genero, Ano) VALUES ('$nome', '$genero','$ano')";

//echo $sql;

if (mysqli_query($conn, $sql)) {

    echo "Novo registro inserido com sucesso!";
    print_r("<br><a href='index.php'>Voltar</a>");

} else {

    echo "Erro ao inserir registro: " . mysqli_error($conn);
}







