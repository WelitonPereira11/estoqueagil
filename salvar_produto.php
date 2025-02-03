<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome_produto = $_POST['nome_produto'];   
        $preco_compra = $_POST['preco_compra'];    
        $preco_venda = $_POST['preco_venda'];   
        $quantidade = $_POST['quantidade'];
        $caracteristicas = $_POST['caracteristicas'];

        $sqlupdate = "UPDATE produtos SET nome_produto='$nome_produto', preco_compra='$preco_compra', preco_venda='$preco_venda', quantidade='$quantidade', caracteristicas='$caracteristicas' WHERE id='$id'"; 

        $result = $conexao->query($sqlupdate);
        
    }

    header('Location: editar_produto.php'); 
    exit();

?>