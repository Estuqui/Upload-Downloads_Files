<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Views/CSS/LoginEstilo.css">
    <title>Página de Login</title>
</head>

<body>
    <div class="form-box">
        <h2>LOGIN</h2>
        <form action="/Controllers/UserController.php" method="POST">

            <div class="input-group ">
                <label for="email">Usuário</label>
                <input type="email" id="email" name="email" placeholder="Digite o seu email" required>
            </div>

            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="password" placeholder="Digite sua senha" required>
            </div>

            <div class="input-group">
                <button type="submit">Entrar</button>
            </div>

        </form>
    </div>
    </div>
</body>

</html>