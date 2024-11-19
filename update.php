<?php  
include 'conexao.php';

$id = $_POST["id"];
$nome = $_POST["nome"];
$genero = $_POST["genero"];
$ano = $_POST["ano"];

$sqlUpdate = "UPDATE alunos SET Nome = '$nome', genero = '$genero', ano = '$ano' WHERE  ID = $id ";

if(mysqli_query($conn,$sqlUpdate)){
    print_r("Dado Atualizado com sucesso!!");
    print_r("<br><a href='index.php'>Voltar</a>");
}else {
    
    echo "Erro ao Atualizar registro: " . mysqli_error($conn);
}

