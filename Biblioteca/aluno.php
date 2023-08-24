<?php

    class Aluno{

        private $nome;
        private $email;
        private $endereco;
        private $localidade;

        public function __construct($nome,$email,$endereco,$localidade)
        {   
            $this->nome=$nome;
            $this->email=$email;
            $this->endereco=$endereco;
            $this->localidade=$localidade;
        }
        public function exibirInformacoes(){

            echo 'Nome: '. $this->nome. "<br>";
            echo 'Email: '. $this->email. "<br>";
            echo 'Endereço: '. $this->endereco. "<br>";
            echo 'Localidade'. $this->localidade; 
        }
    }
    $aluno = new Aluno("Allan", "apsoa", "soka", "sp");
    echo "$aluno";

?>