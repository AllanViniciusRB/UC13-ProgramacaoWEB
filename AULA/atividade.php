<?php 

class Usuario {
    protected $IdU;
    protected $login = 'allan';
    protected $senha = '1234'; 
    protected $email = "aposkaoskoaskapo@gmail.com";

    public function __construct($login, $senha, $email)
    {
        $this->login = $login;
        $this->senha = $senha;
        $this->email = $email;
    }
    
    public function exibirUsuario(){
        echo "Login: {$this->login}/n";
        echo "Senha: {$this->senha}/n";
        echo "Email: {$this->email}/n";
    }
}

class Aluno {

    protected $ID;
    public $nomecompleto = 'Allan';
    public $email;
    public $DataNasc;
    public $endereco;
    public $CodigoAluno = "11";

    public function __construct($nomecompleto, $email, $DataNasc, $CodigoAluno, $endereco)
    {
        $this->nomecompleto = $nomecompleto;
        $this->email = $email;
        $this->DataNasc = $DataNasc;
        $this->endereco = $endereco;
        $this->CodigoAluno = $CodigoAluno;
    }
    
    
    public function exibirAlunos (){
      echo $this->nomecompleto;
      echo '<br>';
      echo $this->DataNasc;

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
    
    public function __construct($Id, $titulo, $autor, $numeros_paginas, $preco, $ano_public, $isbn){
        $this->Id = $Id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numeros_paginas = $numeros_paginas;
        $this->preco = $preco;
        $this->ano_public = $ano_public;
        $this->isbn = $isbn;
    }
    public function exibirLivros(){
        echo "Id: {$this->Id}/n";
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
    public $nomeAluno = "Jasasasoa";
    public $nomeLivro;
    public $quantidade;
    public $dataRetirada;
    public $dataDevolução;

    public function __construct($ID, $nomeAluno, $nomeLivro, $quantidade, $dataRetirada, $dataDevolução)
    {
        $this->ID = $ID;
        $this->nomeAluno = $nomeAluno;
        $this->nomeLivro = $nomeLivro;
        $this->quantidade = $quantidade;
        $this->dataRetirada = $dataRetirada;
        $this->dataDevolução = $dataDevolução;
    }

    public function exibirEmprestimo(){
        echo "Id: {$this->ID}/n";
        echo "Nome do Aluno: {$this->nomeAluno}/n";
        echo "Nome do Livro: {$this->nomeLivro}/n";
        echo "Quantidade de Livros: {$this->quantidade}/n";
        echo "Data de Retirada: {$this->dataRetirada}/n";
        echo "Data de Devolução: {$this->dataDevolução}/n";
    }
    
}
?>