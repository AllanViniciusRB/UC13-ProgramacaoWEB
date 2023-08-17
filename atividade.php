<?php 

class Usuario {
    protected $IdU;
    protected $login = 'allan';
    protected $senha = '1234'; 
    protected $email = "aposkaoskoaskapo@gmail.com";

    
}

class Aluno {

    protected $ID;
    public $nomecompleto = 'Allan'; 
    public $email;
    public $DataNasc;
    public $endereco;
    public $CodigoAluno = "11";

    public function dadosAluno ($nomecompleto, $email, $DataNasc, $CodigoAluno){
        $this->nomecompleto=$nomecompleto;
        $this->email;
        $this->DataNasc;
        $this->CodigoAluno;
    }
    
}

class Livro {
    protected $Id;
    protected $livro;
    public $titulo;
    public $autor;
    public $numeros_paginas;
    private $preco;
    public $ano_public;
    public $isbn;
    
    public function __construct($titulo, $autor, $numeros_paginas, $preco, $ano_public, $isbn){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numeros_paginas = $numeros_paginas;
        $this->preco = $preco;
        $this->ano_public = $ano_public;
        $this->isbn = $isbn;
    }

    public function exibirLivros(){
        echo "Titulo: {$this->titulo}/n";
        echo "Autor: {$this->autor}/n";
        echo "Números de Páginas: {$this->numeros_paginas}/n";
        echo "Preço: {$this->preco}/n";
        echo "Ano de Publicação: {$this->ano_public}/n";
        echo "ISBN: {$this->isbn}/n";
    }
}
   
class Emprestimo {
    private $ID;
    private $emprestimo;
    public $nomeAluno;
    public $nomeLivro;
    public $quantidade;
    public $dataDeRetirada;
    public $dataDeDevolução;
}

?>