<html>
    <head>
        <meta charset="utf-8">
        <title>Dados CEP</title>

    </head>

    <body>
        <h1>Informações</h1>

        <form action="endereco.php" method="post">
        <fieldset>
            <legend>Digite o CEP: </legend>    
            <input name="cep" type="text" placeholder="00000-000">         
            <button type="submit">Pesquisar</button>
        </fieldset>
        </form>
        <form action="aluno.php" method="post">
            <fieldset>
            <legend>Insira o nome do Aluno: </legend>
            <input name="nome" type="text" placeholder="Nome completo por favor!">
            <button type="submit">Confirmar</button>
            </fieldset>
        </form>
        <hr>
        <h3>Insira os dados</h3>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="cep">CEP:</label>
        <input type="cep" id="cep" name="cep">
        

    </body>
</html>