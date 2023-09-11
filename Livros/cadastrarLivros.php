<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livros</title>
</head>
<body>
    <h1>Cadastrar Livros</h1>

    <form action="objetos.php"method="post">

    <label for="tituloLivro">Titulo do Livro: </label>
    <input type="text" id="tituloLivro" name="tituloLivro">
    <br>
    <label for="autorDLivro">Autor do Livro: </label>
    <input type="autorDLivro" id="autorDLivro" name="autorDLivro">
    <br>
    <label for="numeroPagina">Numero de Pagina: </label>
    <input type="text" id="numeroPagina" name="numeroPagina">
    <br>
    <label for="preco">Valor do Livro: </label>
    <input type="text" id="preco" name="preco">
    <br>
    <label for="anoPublicacao">Ano de publicação: </label>
    <input type="tel" id="nome" name="anoPublicacao">
    <br>
    <label for="isbn">Código do Livro: </label>
    <input type="date" id="isbn" name="isbn">
    <br>

    <button type="submit" name="confirm2">Confirmar</button>
    <br>
    <button type="reset">Limpar</buttton>
    <br>
    </form>

</body>
</html>