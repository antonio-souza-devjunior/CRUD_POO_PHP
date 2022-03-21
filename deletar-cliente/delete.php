<?php
    require_once "../conexao_db/conexao.php";
    $conexao = new Conexao();
    $id = $_GET["id"];
    if($conexao->Delete($id)){
        header('Location: ../analisa-clientes/analisa.php?true');
    }else{
        header('Location: ../analisa-clientes/analisa.php?false');
    }
