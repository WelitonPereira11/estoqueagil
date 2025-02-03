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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA INICIAL</title>
    <link rel="stylesheet" href="style_home.css">
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
        <br><br>
         <div class="opcao">
            <a href="cadastro_produto.php"><button class="botoes"> <img src="logo_estoque.png" alt="quadrados" class="img1"> <p class="titulo">CADASTRAR PRODUTOS</p></button></a>
           <br>
            <a href="editar_produto.php"><button class="botoes"> <img src="estoque2.png" alt="quadrados" class="img1"> <p class="titulo">EDITAR PRODUTOS</p></button></a>
          <br>
            <a href="lista_produtos.php"><button class="botoes"><img src="estoque.png" alt="quadrados" class="img1"> <p class="titulo">VISUALIZAR PRODUTOS</p></button></a>
        </div>
        <br><br>

        <div class="opcao">
        <a href="cadastro_cliente.php"><button class="botoes"><img src="1.png" alt="quadrados" class="img1"> <p class="titulo">CADASTRO DE CLIENTES</p></button></a>
        <br>
        <a href="editar_cliente.php"><button class="botoes"><img src="2.png" alt="quadrados" class="img1"> <p class="titulo">EDITAR CLIENTES</p></button></a>
        <br>
        <a href="lista_cliente.php"><button class="botoes"><img src="3.png" alt="quadrados" class="img1"> <p class="titulo">VISUALIZAR CLIENTES</p></button></a>
          </div>




          
    </main>
</body>
</html>