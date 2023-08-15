<html>
    <head>
        <title>Aula de PHP</title>
    </head>
    <body>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quos laudantium? Est officia, mollitia dolore, repellendus dolorum molestias, sequi earum laboriosam in alias quos eius autem placeat fugiat voluptatum porro.</p>

        <?php
            echo "Allan Vinicius";
        ?>

        <br>
        <?php
            print "Senac Marília";
        ?>

        <br>

        <!-- Comentario em Html -->

        <?php

        // Comentário em PHP

        /* 
            Varias
            linhas
        */
        //Ele identifica o tipo da variavel inserindo.
        $nomeCompleto = "Allan Vinicius";
        $idade = 40;
        $status = true;
        $salario = 1320.50;
        
        echo $nomeCompleto." ".$idade;
        echo "<br>";
        echo "$nomeCompleto $idade anos";
        echo '<br>';

        $logoSenac = "https://media.tenor.com/9GJGnYGcEYIAAAAd/felca-felca-base.gif";
        ?>

        <img src="<?php echo $logoSenac ?>" alt="Senac Marília">

    </body>
</html>