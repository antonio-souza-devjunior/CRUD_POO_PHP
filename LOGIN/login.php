<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/44758b4b15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style-login.css">
    <title>Login</title>
</head>
<body>
    
    <form action="verifica-login.php" method="POST" class="conteiner">

        <fieldset class="child-conteiner">
            <legend>Entrar</legend>
            <div class="campo-input">
                <input type="email" name="email" required class="input input-email" placeholder="Usúario:">
                <i class="fa-solid fa-user"></i>
            </div><!-- campo-input -->
            <div class="campo-input">
                <input type="password" name="senha" class="input input-senha" placeholder="Senha:">
                <i class="fa-solid fa-lock"></i>
            </div><!-- campo-input -->
            <input type="submit" class="btn-submit" value="Login" name="login">
            <a href="../adicionar-cliente/adicionar.php">Cadastrar</a>
        </fieldset>

    </form>

</body>
</html>