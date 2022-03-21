<?php
    session_start();
    //var_dump($_POST);
    if(isset($_POST["login"])){
        //conexao com o banco 
        $db_host = "Localhost";
        $db_usuario = "root";
        $db_senha = "amin2003";
        $db_nome = "crud_poo";

        $conexao = mysqli_connect($db_host, $db_usuario,$db_senha,$db_nome);
        if(mysqli_errno($conexao)){
            echo "Erro ao tentar encontrar Banco!";
        }else{
            $email = mysqli_escape_string($conexao, $_POST["email"]);
            $senha = mysqli_escape_string($conexao, $_POST["senha"]);
            
            $sql = "SELECT email FROM clientes WHERE email = '$email'";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) > 0){
                $senha = md5($senha);
                $sql = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
                $resultado = mysqli_query($conexao,$sql);

                if(mysqli_num_rows($resultado) == 1){
                    $_SESSION["logado"] = "true";
                    $_SESSION["email"] = $email; 
                    header('Location: ../analisa-clientes/analisa.php');
                    exit();
                }else{
                    header('Location: login.php');
                }
            
            }else{
                echo "Erro!";
            }
        }



    }