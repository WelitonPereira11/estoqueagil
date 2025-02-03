<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style_login.css">

</head>
<body>
    <div class="login">
        <h1>Login</h1>

        <form action="autorizar.php" method='POST'>
         <p>Login</p>
         <input type="text" name="email" placeholder="seu usuario">
        
         <p>Senha</p>
        <input type="password" name='senha' placeholder="sua senha">
           <br><br>
           <input class="submit" type="submit" class="submit" name="submit" id="submit"  value="Login">
           
           <br><br>
    

        </form>
        <a href="cadastro.php"><button>CADASTRE-SE</button></a>
    </div>

</body>
</html>

?>