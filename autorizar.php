<?php
session_start();  // Iniciar a sessão

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    include_once('config.php');  // Inclui o arquivo de conexão com o banco de dados

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Prepara a consulta SQL para verificar o usuário
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);  // 'ss' indica que estamos passando 2 strings

    // Executa a consulta
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        // Redireciona para o login com erro
        header('Location: login.php?erro=1');
        exit();
    } else {
        // Salva as informações de login na sessão
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        // Redireciona para a página inicial
        header('Location: home.php');
        exit();
    }
} else {
    // Se os campos estiverem vazios, redireciona para o login
    header('Location: login.php');
    exit();
}
?>
