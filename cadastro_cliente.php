<?php


    if(isset($_POST['submit'])) {



        include_once('config.php');

        $nome = $_POST['nome'];   
        $telefone = $_POST['telefone'];    
        $email = $_POST['email'];   
        $endereço = $_POST['endereço'];
      

        $result = mysqli_query($conexao, "INSERT INTO clientes(nome,telefone,email,endereço) VALUES ('$nome', '$telefone', '$email','$endereço')");
    }
?>

<?php
session_start();

// Verifica se as variáveis de sessão 'email' e 'senha' estão definidas
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    // Se não estiver logado, redireciona para a página de login
    header('Location: login.php');
    exit();
}

// Se estiver logado, define a variável $logado
$logado = $_SESSION['email'];
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de produto</title>
    <link rel="stylesheet" href="style_cadastro_produto.css">
</head>
<body>

    
       
<div class="lateral">
        <br><br>
        <p>NOME</p>
        <BR></BR></BR>
        <a href="home.php"><button class="menu">INICIO </button></a>
        <br><br> 
        <a href="cadastro_produto.php"><button class="menu">PRODUTO</button></a>  
        <br><br>   
       <a href="lista_cliente.php"><button class="menu">CLIENTE</button></a>
        <br><br>
        <a href="lista_produtos.php"><button class="menu">ESTOQUE</button></a>
        <BR></BR>
        <a href="sair.php"> <button class="menu sair">SAIR</button></a>
    </div>

    <main>
        <div class="cabecalho">
        <h1>ESTOQUE ÁGIL</h1> <img src="Beneficios - bom sono (1080x1080) (6).png" alt="logo da empresa" class="logo">
         </div>
       
    

    </main>    
    
   
    <div class="formulario">
        <h1 class="paragrafo">Cadastre o Cliente</h1><br>

        <form action="cadastro_cliente.php" method="POST"> 
    <p>Nome do cliente</p> <br>
    <input type="text" name="nome" placeholder="nome" required>

    <br><br><p>Telefone do cliente</p><br>
    <input type="text" name="telefone" placeholder="telefone" required>      

    <br><br><p>Email do cliente</p><br>
    <input type="text" name="email" placeholder="email" required><br>

    <br><br><p>Endereço do cliente</p><br>
    <input type="text" name="endereço" placeholder="endereço" required>    

    <br><br><br><br><br>
    <input type="submit" name="submit" id="submit" class="submit">
</form>

            </div>

            
   

       





    
    </div>
    
</body>
</html>