<?php

    class Conexao {

        private $connect;

        public function __construct() 
        {
            try {
                $this->connect = new PDO("mysql:dbname=crud_poo;dbhost=localhost","root","amin2003");
            }catch(PDOException $e){
                echo "Erro ao se conectar com o banco! ".$e->getMessage();
                exit();
            }
        }

        public function Create($nome, $sobrenome, $email, $senha){
            $cmd = $this->connect->prepare("SELECT email FROM clientes WHERE email = :e");
            $cmd->bindValue(":e",$email);
            $cmd->execute();
            if($cmd->rowCount() == 1){
                return false;
            }else{
                $cmd = $this->connect->prepare("INSERT INTO clientes(nome,sobrenome,email,senha) 
                    VALUES(:n, :sn, :e, :s )");
                $cmd->bindValue(":n",$nome);
                $cmd->bindValue(":sn",$sobrenome);
                $cmd->bindValue(":e",$email);
                $cmd->bindValue(":s",$senha);
                $cmd->execute();
                return true;
            
            }
            //$res = $cmd->fetch(PDO::FETCH_ASSOC);
            //vardump($res);
        }

        public function Read(){
            $cmd = $this->connect->prepare("SELECT * FROM clientes");
            $cmd->execute();
            $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
            //var_dump($resultado);
        }

        public function Update($id, $nome, $sobrenome, $email, $senha)
        {
            $cmd = $this->connect->prepare("UPDATE clientes SET nome=:n, sobrenome=:sn, email=:e,         senha=:s WHERE id = :id");
        $cmd->bindValue(":id",$id);
        $cmd->bindValue(":n",$nome);
        $cmd->bindValue(":sn",$sobrenome);
        $cmd->bindValue(":e",$email);
        $cmd->bindValue(":s",$senha);
        return $cmd->execute();
        }

        public function Delete($id){
            $cmd = $this->connect->prepare("DELETE FROM clientes WHERE id = :id ");
            $cmd->bindValue(":id",$id);
            return $cmd->execute();
        }
    }


    
