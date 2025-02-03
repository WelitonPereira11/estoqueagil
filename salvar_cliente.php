<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];   
        $telefone = $_POST['telefone'];    
        $email = $_POST['email'];   
        $endereço = $_POST['endereço'];

        $sqlupdate = "UPDATE clientes SET nome='$nome', telefone='$telefone', email='$email', endereço='$endereço' WHERE id='$id'"; 


        $result = $conexao->query($sqlupdate);
        
    }

    header('Location: editar_cliente.php'); 
    exit();

?>