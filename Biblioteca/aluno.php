<?php

    class Aluno{

        private $nome;
        private $email;
        private $cep;


        public function __construct($nome,$email,$cep)
        {   
            $this->nome=$nome;
            $this->email=$email;
            $this->cep=$cep;
        }
        public function exibirInformacoes(){
            
            echo 'Nome: '. $this->nome. "<br>";
            echo 'Email: '. $this->email. "<br>";
            echo 'CEP: '. $this->cep. "<br>";
        }
        
    }
    class inserirDados{
        
        
        public function receberDados(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $endereco = $_POST ["cep"];
            }
        }    
        
    }
    

?>