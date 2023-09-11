<?php
include 'endereco.php'; // Inclua o arquivo com a classe Endereco

include 'pagina.php';

$endereco = new Endereco(); // Crie uma instância da classe Endereco

$cep = "17523-110";

$endereco->buscarEndereco($cep);

$endereco->imprimirEndereco($cep);
var_dump($cep);

if(isset($POST['moster_informacoes'])){

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cep'])) {
        $cep = $_POST['cep'];
        $endereco = new Endereco();
        $endereco->buscarEndereco($cep); 
        $endereco->imprimirEndereco($cep);
        
    }
}
?>
