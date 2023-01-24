<?php
    Class database
    {
        private $pdo;
        public $msg = "";
        public $dadosDaCompra = "";
        public $dadosDaCompra2 = "";
        public function conectar($nome, $host, $user, $password)
        {
            global $pdo;
            global $msg;
            try {
                
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$user,$password);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }
            
        }

        public function login($user, $password)
        {
            global $pdo;  
            $sql = $pdo->prepare("SELECT ID_USER FROM CONTAS WHERE EMAIL_USER = :u AND HASH_USER = :h");  
            $sql->bindValue(":u", $user);
            $sql->bindValue(":h", $password);    //lembrar de aplicar criptografia depois
            //$sql = $pdo->prepare("SELECT id_user FROM usuarios WHERE nome_user = '".$user."' AND hash_user = '".$password."'");  
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                $dados = $sql->fetch();
                session_start();
                $_SESSION['ID_USER'] = $dados['ID_USER'];                
                return true;
            }
            else
            {
                return false;
            }
        }

        public function GetUser($id)
        {
            try {
                
                global $pdo;
                global $msg;
                $sql = $pdo->prepare("SELECT * FROM CONTAS WHERE ID_USER = ".$id);  //Consulta
                $sql->execute(); // Execução
                $dados = $sql->fetch();                
                return $dados;
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }            
        }
    }
?>