<?php
    if(isset($_POST['submit'])) {

      include_once('config.php');

      $nome = $_POST ['nome'];
      $email = $_POST ['email'];
      $senha = $_POST ['senha'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");



    }
?>









<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="style_cadastro.css">
</head>
<body>

    <div class="login">
        <h1>Cadastre-se</h1>

    
        <form action="cadastro.php" method="POST">
            <p>Nome</p>
            <input type="text" placeholder="seu nome" name="nome" required>

            <p>E-mail</p>
            <input type="email" placeholder="seu E-mail" name="email" required>

            <p>Senha</p>
            <input type="password" placeholder="crie sua Senha" name="senha" required>

            <br><br>
            <input type="submit" name="submit" id="submit" class="submit" value="Cadastrar">

        </form>

        <br><br>
        <a href="login.php"><button>Login</button></a>

    </div>

</body>
</html>
