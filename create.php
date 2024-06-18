<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $telefone = $_POST["telefone"];

    // inserindo na tabela
    $sql = "INSERT INTO pessoas (nome, sobrenome, telefone) VALUES ('$nome', '$sobrenome','$telefone')";

    if($conn->query($sql) === true){
        header("Location: index.php"); //redireciona para a o index se der tudo certo
        exit();
    }else{
        echo "Erro: " . $sql . "<br>"; //retorna erro
    }
}

$conn->close();
?>