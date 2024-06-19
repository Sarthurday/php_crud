<?php
include 'config.php';  // Inclui a configuração do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idUser = $_POST["id"];           // Obtém o valor do campo ID
    $nome = $_POST["nome"];       // Obtém o valor do campo nome
    $email = $_POST["email"]; // Obtém o valor do campo sobrenome
    $cargo = $_POST["cargo"];   // Obtém o valor do campo telefone

    // Atualiza os dados na tabela pessoas
    $userInsert = "UPDATE usuarios SET nome='$nome', email='$sobrenome', cargo='$telefone' WHERE id=$idUser";

    if ($conn->query($userInsert) === TRUE) {
        header("Location: index.php");  // Redireciona para a página principal se a atualização for bem-sucedida
        exit();
    } else {
        echo "Erro: " . $userInsert . "<br>" . $conn->error;  // Exibe um erro se a atualização falhar
    }
}

$conn->close();  // Fecha a conexão com o banco de dados
?>