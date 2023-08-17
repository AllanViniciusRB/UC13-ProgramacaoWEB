
<?php
    include "funcionario.php";

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>

</head>
<body>
    <h1>Lista de funcionários</h1>

<table border ="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
        </thead>

    <tbody>
        <?php foreach($listaFuncionarios as $funcionario):?>
        <tr>    
            <th><?=$funcionario["id"]?></th>
            <td><?=$funcionario["nome"]?></td>
            <td><?=$funcionario["email"]?></td>
            <td><?=$funcionario["telefone"]?></td>
            <td> Editar Visualizar  Excluir</td>
        </tr>
        <?php endforeach;?>
</tbody>
    <tfoot>
    <tr>
        <td colspan ="5">Foi encontrado 4 funcionários cadastrados</td>
    </tr>
    </tfoot>
</table>

</body>
</html>