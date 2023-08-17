<?php

class Aluno{

    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade =$idade;
    }
    
    public function printTela($nome, $idade){
        echo $this->nome;
        echo '<br>';
        echo $this->idade;

    }
}
    $aluno = new Aluno ('Allan', '24');

    $aluno->printTela($nome, $idade);
?>
