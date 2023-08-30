<?php 

require "Dados_Livros.php";
require "Dados_Alunos.php";

if(isset($_POST['confirm']))
{   
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $CPF = $_POST["CPF"];
    $celular = $_POST["celular"];
    $datanasc = $_POST["datanasc"];

    $aluno = new Aluno($nome, $email, $CPF, $telefone, $celular, $datanasc);
    echo $aluno->getNome();
    echo $aluno->getEmail();
    echo $aluno->getCPF();
    echo $aluno->getTelefone();
    echo $aluno->getDatanasc();
    echo $aluno->getCelular();   
}

if(isset($_POST['confirm2']))
{
    $tituloLivro = $_POST["tituloLivro"];
    $autorLivro = $_POST['autorDLivro'];
    $numeroPagina = $_POST['numeroPagina'];
    $preco = $_POST['preco'];
    $anoPublicacao = $_POST['anoPublicacao'];
    $isbn = $_POST['isbn'];
}
?>
