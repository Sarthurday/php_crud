<?php
include 'config.php';

if(isset($_GET['id'])){
    $idUser = $_GET['id'];
    $userInsert = "SELECT * FROM pessoas WHERE id=$idUser";
    $result = $conn->query($username);
    $row = $result->fetch_assoc(); //obtem os dados do registro
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Pessoa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Atualizar Pessoa</h2>
    <!-- Formulário para atualizar a pessoa -->
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">  <!-- Campo oculto com o ID -->
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $row['nome']; ?>" required>  <!-- Campo para o nome -->
        </div>
        <div class="form-group">
            <label for="email">Sobrenome</label>
            <input type="text" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" required>  <!-- Campo para o sobrenome -->
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="vargo" class="form-control" id="cargo" value="<?php echo $row['cargo']; ?>" required>  <!-- Campo para o telefone -->
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>  <!-- Botão para enviar o formulário -->
    </form>
</div>
</body>
</html>