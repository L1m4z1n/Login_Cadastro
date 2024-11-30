<?php
session_start();
include('config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email= $conn->real_escape_string($_POST['email']);
  $password= $_POST['password'];

  $sql="SELECT * FROM sua_tabela WHERE email = '$email'";
  $result= $conn->query($sql);

  if ($result->num_rows > 0) {
    $id = $result->fetch_assoc();
    if (password_verify($password,$id['password'])) {
      $_SESSION['id'] = $id['id'];
      $_SESSION['nome'] = $id['nome'];
      header('Location: sucesso.php');
      exit;
    }
    else{
      $error = "Credenciais Invalidas!";
    }
  } else{
    $error = "Credenciais Invalidas!";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>Projeto Login</title>
</head>
<body>   
<h1>Login</h1>
    <form action="login.php" method="POST">
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
                <input type="password"  class="form-control" id="password"  name="password" placeholder="Sua Senha" required>
            </div>
    </div>        

    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    <div class="text-center mt-3">
      <a href="cadastro.php" class="btn btn-link">Ainda não fez o cadastro?Faça o Cadastro!</a>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">

    </script>
</body>
</html>