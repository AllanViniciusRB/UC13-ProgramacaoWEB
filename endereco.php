<?php
    if(isset($_POST['cep']) && !empty($_POST['cep']))
    {
        $cep= $_POST['cep'];
        $resultado = file_get_contents("https://viacep.com.br/ws/$cep/json/");

        $dadosEndereco = json_decode($resultado, true);

        var_dump($dadosEndereco);
    }else{
        header("location:buscar_endereco.php");
        exit;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Buscar Endereço</title>

        <style>
            .bloquin{
                text-align: center;
                margin: auto;
                width: 320px;
                border: 3px solid green;
                padding: 10px;
                color:black;      
            }
            
        </style>

    </head>

    <body>
        </body>
        <div class="bloquin">
            <h1>Endereço</h1>
            <hr>
            <p>CEP: 17524-111 <?=$dadosEndereco['cep']?></P>
            <p>Lougradouro: Rua Paraiba</p>
            <p>Bairro: Centro</p>
            <p>Cidade: Marília</p>
            <p>Estado: SP</p>
        </div>
        </body>
    </html>