<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sucesso</title>
</head>
<body>
    <h1 class="h1">Deu Certo!!!</h1>
    <p>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</p>
</body>
</html>
