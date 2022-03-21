<?php

    require_once "../conexao_db/conexao.php";

    //var_dump($_POST);

    if(!isset($_POST["submit"])){

    }else{
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $senha = md5($senha);

        $conexao = new Conexao();

        if($conexao->Create($nome,$sobrenome,$email,$senha)){
            header('Location: adicionar.php?Sucesso!');
        }else{
            header('Location: adicionar.php?Falhou!');
        }
        

    }