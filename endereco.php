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
            <h1>Dados</h1>
            <hr>
            <p>CEP: <?=$dadosEndereco['cep']?></P>
            <p>Lougradouro: <?=$dadosEndereco['logradouro'] ?></p>
            <p>Bairro: <?=$dadosEndereco['bairro'] ?></p>
            <p>Cidade: <?=$dadosEndereco['localidade'] ?></p>
            <p>Estado: <?=$dadosEndereco['uf'] ?></p>
        </div>
        </body>
    </html>