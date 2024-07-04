<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            background-image: url('../img/login-fundo.png'); /* Substitua 'sua-imagem-de-fundo.jpg' pelo caminho da sua imagem */
            background-size: cover;
            background-position: center;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7); /* Overlay mais escuro */
        }

        .login-container {
            position: relative;
            background-color: rgba(0, 0, 0, 0.8); /* Fundo preto semi-transparente */
            padding: 40px 30px; /* Aumentando o tamanho do contêiner */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border: 2px solid #fff; /* Borda branca */
            width: 350px; /* Aumentando a largura do contêiner */
            text-align: center;
            z-index: 1; /* Garantindo que o contêiner esteja acima do overlay */
        }

        .login-container h1 {
            margin-bottom: 20px;
            color: #fff; /* Texto branco */
        }

        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container input[type="submit"] {
            width: calc(100% - 20px); /* Para evitar overflow */
            padding: 10px;
            margin: 10px 0; /* Espaçamento entre os campos */
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Para incluir padding e border no tamanho total */
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            background-color: rgba(255, 255, 255, 0.9); /* Fundo branco semi-transparente */
            color: #000; /* Texto preto */
        }

        .login-container input[type="submit"] {
            border: none;
            background-color: #5cb85c;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="#">
            <input type="text" placeholder="Nome de usuário" required>
            <input type="password" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
