<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Estilo do corpo da página */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(135deg, #28a745, #ffc107); /* Gradiente verde para amarelo */
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        /* Container do formulário de login */
        .login-container {
            background: rgba(255, 255, 255, 0.8); /* Fundo branco com transparência */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        /* Título */
        .login-container h1 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Estilo dos campos de input */
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Estilo do botão de login */
        .login-button {
            background-color: #28a745; /* Cor verde */
            color: white;
            border: none;
            padding: 12px 20px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Efeito do botão de login ao passar o mouse */
        .login-button:hover {
            background-color: #218838;
        }

        /* Estilo do link de esqueci minha senha */
        .forgot-password {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            display: block;
            margin-top: 10px;
        }

        /* Efeito do link ao passar o mouse */
        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>
        <form action="login_backend.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit" class="login-button">Entrar</button>
        </form>
        <a href="#" class="forgot-password">Esqueci minha senha</a>
    </div>

</body>
</html>
