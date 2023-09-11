<?php 
    class Aluno
    {
        private $Nome;
        private $Email;
        private $CPF;
        private $telefone;
        private $celular;
        private $datanasc;

        public function __construct($Nome, $Email, $CPF, $telefone, $celular, $datanasc)
        {
            $this->Nome = $Nome;
            $this->Email = $Email;
            $this->CPF = $CPF;
            $this->telefone = $telefone;
            $this->celular = $celular;
            $this->datanasc = $datanasc;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function getEmail(){
            return $this->Email;
        }

        public function getCPF(){
            return $this->CPF;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function getDatanasc(){
            return $this->datanasc;
        }

        public function getCelular(){
            return $this->celular;
        }  
    }
    ?>