<?php
 include_once('config.php');

        if(!empty($_GET['id'])) {
        $id = $_GET['id'];
        $sqlselect = "select * from produtos WHERE id=$id";
        $result = $conexao->query($sqlselect);
        
        if($result->num_rows > 0)
        {
            while ($user_data = mysqli_fetch_assoc($result))
            {

                $nome_produto = $user_data['nome_produto'];   
                $preco_compra = $user_data['preco_compra'];    
                $preco_venda = $user_data['preco_venda'];   
                $quantidade = $user_data['quantidade'];
                $caracteristicas = $user_data['caracteristicas'];


            }
        
       
        }
        else {
            header('Location: editar_produto.php');
        }

       


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
        <h1 class="paragrafo">Cadastre o Produto</h1><br>

        <form action="salvar_produto.php" method="POST"> 
                 
            <p>Nome do Produto</p> <br>
                <input type="text" name="nome_produto" placeholder="Produto" value="<?php echo $nome_produto ?>" required>
           
                 <br><br><p>Preço de Compra</p><br>
                 <input type="text" name="preco_compra" placeholder="Ex: 110.10" value="<?php echo $preco_compra ?>" required>      
        
                 <br><br><p>Preço de Venda</p><br>
                 <input type="text" name="preco_venda" placeholder="Ex: 110.10" value="<?php echo $preco_venda ?>" required><br>

                 <br><br><p>Quantidade em estoque</p><br>
                 <input type="text" name="quantidade" placeholder="Ex: 110.10" value="<?php echo $quantidade ?>" required>    
                 
                 <br><br><p>Características Especiais</p><br>
                 <input type="text" name="caracteristicas" placeholder="Tamanho, Cor, Peso, etc." value="<?php echo $caracteristicas ?>" required>
                 <input type="hidden" name="id" value="<?php echo $id ?>" >
                 <br><br>
                 

                  <input type="submit" name="update" id="submit" class="submit">            
            </div>
        </form>

    </div>
    
</body>
</html>
