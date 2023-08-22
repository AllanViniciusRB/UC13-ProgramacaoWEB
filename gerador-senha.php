<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de senha</title>

    <style>
        .boxSenha{
            border:1px solid #cccccc;
            display: inline-block;
            padding: 50px;
            text-align: center;
            background-color: #fbec5d;
            font-size: 20px;
            color: black;
            font-weight: bold;
            margin: 5px;
            
        }
    </style>
</head>
<body>
    <div class="gerarS">
    <h1>Gerador de senha</h1>

    <form action="gerador-senha.php" method="get">
        <label for="qtdeSenha">Quantidade de Senhas</label>
        <br>
        <input name="qtdeSenha" type ="number"id="qtdeSenha">
        <br>
        <button type="submit">Gerar</button>
        <a href ="gerador-senha.php">Cancelar Senhas</a>

    </form>
    
        <?php if(isset($_GET['qtdeSenha'])): ?>

            <?php for($i = 1; $i <= $_GET['qtdeSenha']; $i++): ?>
                <div class="boxSenha">
                    <?=$i ?>
                </div>
            <?php endfor ?>
        <?php endif; ?>
    </div>
    <hr>
        <p>
            Copyright &copy; <?=date("d/m/Y H:i:s")?> - Todos os direitos são reservados
        </p>

        





</body>
</html>