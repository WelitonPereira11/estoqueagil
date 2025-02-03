<?php
session_start();
include_once('config.php');

if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit();
}
$logado = $_SESSION['email'];

    $sql = "SELECT * FROM produtos ORDER BY id DESC";

    $result = $conexao->query($sql);




?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produtos</title>
    <link rel="stylesheet" href="style_lista_produtos.css">
    
</head>
<body>

       
<div class="lateral">
        <br>
        
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



         <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUTO</th>
      <th scope="col">PREÇO DE COMPRA</th>
      <th scope="col">PREÇO DE VENDA</th>
      <th scope="col">QUANTIDADE</th>
      <th scope="col">CARACTERISTICAS</th>
    </tr>
  </thead>

  <tbody>

  <?php 
    while ($use_data = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$use_data['id']."</td>";
        echo "<td>".$use_data['nome_produto']."</td>";
        echo "<td>".$use_data['preco_compra']."</td>";
        echo "<td>".$use_data['preco_venda']."</td>";
        echo "<td>".$use_data['quantidade']."</td>";
        echo "<td>".$use_data['caracteristicas']."</td>";
        
        
        
        
        echo "</tr>";
    }
?>


  </tbody>


</table>
        
</body>
</html>