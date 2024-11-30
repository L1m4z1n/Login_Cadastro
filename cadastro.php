<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome= $conn->real_escape_string($_POST['nome']);
    $email=$conn->real_escape_string(($_POST['email']));
    $password= password_hash($_POST['password'],PASSWORD_BCRYPT);

    $sql = "INSERT INTO nome_da_sua_tabela_aqui(
    nome,
    email,
    password	
) VALUES ('$nome','$email','$password')";

if($conn->query($sql) === TRUE){
    header('Location: login.php');
    exit;
} else {
    $error= "Erro ao cadastrar usuário:".$conn->error;
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
<div class="container mt-5">
<h1>Cadastre-se</h1>
    <form  method="post" action="cadastro.php">

    <div class="row mb-3">
    <label for="nome" class="form-label">Nome e Sobrenome:</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control is-valid" id="nome" name="nome" placeholder="Seu nome completo" required>
    </div>
    <div class="valid-feedback">
    Tudo certo!
    </div>
  </div>

    <div class="row mb-3">
    <label for="email" class="form-label">Email:</label>
    <div class="col-sm-10">
      <input type="email"  class="form-control is-valid" id="email" name="email" placeholder="email@gmail.com" required>
    </div>
    <div class="valid-feedback">
    Tudo certo!
    </div>
  </div>

    <div class="row mb-3">
            <label for="password" class="form-label">Senha:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password"  name="password" placeholder="Sua Senha" required>
            </div>
    </div>        
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    <p class="mt-3">Já tem uma conta? <a href="login.php">Faça login</a></p>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">

    </script>
</body>
</html>