<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Efetuado</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #42719bff;
            font-family: Arial, sans-serif;
        }
        .box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            text-align: center;
        }
        .box h1 {
            color: #2937f0;
        }
        .box a {
            display: inline-block;
            margin-top: 20px;
            color: #2937f0;
            text-decoration: none;
            font-weight: bold;
        }
        .box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Falha ao entrar</h1>
        <p>Email ou Senha incorretos, tente novamente.</p>
        <a href="login.php">Voltar</a>
    </div>
</body>
</html>