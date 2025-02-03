<?php
include_once('config.php');

        if(!empty($_GET['id'])) {
        $id = $_GET['id'];
        $sqlselect = "SELECT * FROM clientes WHERE id=$id";
        $result = $conexao->query($sqlselect);
        
        if($result->num_rows > 0) {
            $sqldelete = "DELETE FROM clientes WHERE id=$id";
          $resultdelete = $conexao->query($sqldelete);   
    }
}
    header('Location: editar_cliente.php');

?>