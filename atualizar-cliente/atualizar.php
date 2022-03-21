<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
    <link rel="stylesheet" href="style-atualiza.css">
</head>
<body>

    <header class="cabecalho">
        <h1 class="titulo">Editar cliente</h1>
    </header>

    <form action="update_db.php" method="POST" class="corpo">
        <div class="campo-input">
            <input type="text" name="nome" class="input-data" required>
            <label class="sub-texto">Nome:</label>
        </div><!-- campo-input -->
        <div class="campo-input">
            <input type="text" name="sobrenome" class="input-data" required>
            <label class="sub-texto">Sobrenome:</label>
        </div><!-- campo-input -->
        <div class="campo-input">
            <input type="email" name="email" class="input-data" required>
            <label class="sub-texto">E-mail:</label>
        </div><!-- campo-input -->
        <div class="campo-input">
            <input type="password" name="senha" class="input-data" required>
            <label class="sub-texto">Senha:</label>
        </div><!-- campo-input -->
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

        <input type="submit" name="editar" class="btn-submit" value="Editar">
    </form><!-- corpo -->
</body>
</html>