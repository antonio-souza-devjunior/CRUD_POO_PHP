<?php 
    require_once "../conexao_db/conexao.php";
    $conexao = new Conexao();
    if(!isset($_POST["editar"])){

    }else{
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if($conexao->Update($id, $nome, $sobrenome, $email, $senha)){
            header('Location: ../analisa-clientes/analisa.php?Editado');
        }
    }