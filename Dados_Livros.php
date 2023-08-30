<?php

class Livros{

    private $tituloLivro;
    private $autorLivro;
    private $numeroPagina;
    private $preco;
    private $anoPublicacao;
    private $isbn;


    public function __construct($tituloLivro, $autorLivro, $numeroPagina, $anoPublicacao, $isbn)
    {
        $this->tituloLivro;
        $this->autorLivro;
        $this->numeroPagina;
        $this->preco;
        $this->anoPublicacao;
        $this->isbn;
    }
    
    public function getTitulo(){
        return $this->tituloLivro;
    }
    public function getautorLivro(){
        return $this->autorLivro;
    }
    public function getnumeroPagina(){
        return $this->numeroPagina;
    }
    public function getpreco(){
        return $this->preco;
    }
    public function getanoPublicacao(){
        return $this->anoPublicacao;
    }
    public function isbn(){
        return $this->isbn;
    }
    
}
