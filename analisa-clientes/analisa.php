<?php
    require_once "../conexao_db/conexao.php";

    $conexao = new Conexao();
?>


<!DOCTYPE html>
<html lang="-pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/44758b4b15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style-read.css">
</head>
<body>
    
    <header class="cabecalho">
        <h1>Lista de clientes</h1>
        <a href="../LOGIN/logout.php">Sair</a>
    </header>

    <table class="conteiner">
        <thead>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th colspan="2">Opções</th>
        </thead>
        <tbody>
            
            <?php
                //var_dump($conexao->Read());
                $resultado = $conexao->Read();

                foreach($resultado as $dados){
                    echo "<tr>";
                    echo "<td>".$dados["nome"]."</td>";
                    echo "<td>".$dados["sobrenome"]."</td>";
                    echo "<td>".$dados["email"]."</td>";
            ?>
                <td><a href="../atualizar-cliente/atualizar.php?id=<?php echo $dados["id"]; ?>"><i class="fa-solid fa-pen"></i></a></td>
                <td><a href="../deletar-cliente/delete.php?id=<?php echo $dados["id"]; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
            <?php
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>