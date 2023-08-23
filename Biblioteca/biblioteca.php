<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="PT-BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema biblioteca</title>

    <style>
        .formulario{
            text-align: center;
            width: auto;
            align-items: center;
        
        }
        .dados{
            text-align:center;
            display: block;
        }
    </style>
</head>
<body>
   
    <div class="formulario">
        <h1>Sistema de biblioteca</h1>
       
    </div>
        <form action="livros.php" method="$_POST">
            <div class="dados">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <br>
            <label for="idade">Insira sua idade:</label>
            <input type="idade" id="idade" name="idade" required>
            <br>
    
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
            <br>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <br>
            <input type="submit"></input>
        </form>
    </div>
    

    
</body>
</html>