<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <h1>Cadastrar Aluno</h1>
    
    <form action="objetos.php"method="post">
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome">
    <br>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email">
    <br>
    <label for="telefone">Telefone: </label>
    <input type="text" id="telefone" name="telefone">
    <br>
    <label for="CPF">CPF: </label>
    <input type="text" id="CPF" name="CPF">
    <br>
    <label for="celular">CELULAR: </label>
    <input type="tel" id="nome" name="celular">
    <br>
    <label for="datanasc">Data NASC: </label>
    <input type="date" id="datanasc" name="datanasc">
    <br>

    <button type="submit" name="confirm">Confirmar</button>
    <br>
    <button type="reset">Limpar</buttton>
    <br>
    </form>

    <?php 
    require "objetos.php";
    if(isset($_POST["confirm"]))
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $CPF = $_POST["CPF"];
        $celular = $_POST["celular"];
        $datanasc = $_POST["datanasc"];
    }
    
    ?>
</body>
</html>