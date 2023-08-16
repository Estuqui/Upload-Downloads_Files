<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/LoginEstilo.css">
    <title>Página de Registro</title>
</head>

<body>
    <div class=" form-box">
        <h2>Cadastro</h2>
        <form action="/Controllers/UserController.php" method="POST">

            <div class="input-group">
                <label for="email">Digite seu email</label>
                <input type="email" id="email" name="email" placeholder="Digite o seu email" required>
            </div>

            <div class="input-group">
                <label for="email">Digite uma senha</label>
                <input type="email" id="email" name="email" placeholder="Digite sua Senha" required>
            </div>

            <div class="input-group">
                <label for="senha">Confirmar Senha</label>
                <input type="password" id="senha" name="password" placeholder="Digite sua senha" required>
            </div>

            <div class="input-group">
                <button type="submit">Registrar-se</button>
            </div>

        </form>
    </div>
    </div>
</body>

</html>