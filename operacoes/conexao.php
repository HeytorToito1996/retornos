<?php
    class db{
        private $host = "localhost";
        private $usuario = "root";
        private $senha = "";
        private $database = "retornos";

         public function conectaBanco()
        {
            # code...
            $conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database)
            or die ("Não foi Possível se Conectar ao Banco de Dados");

            mysqli_set_charset($conexao,'UTF8');

            return $conexao;
        }
    }
?>