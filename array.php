<?php
    //Array
    $listaCompra = ["Arroz", "Feijão", "ovo", "Picanha"];


    //"Print_r comando para auxiliar o programador.
    print_r($listaCompra);
    
    echo "<hr>";

    //
    var_dump($listaCompra);

    echo "<hr>";
    //imprimir um item especifico no array.
    echo $listaCompra[2];

    echo "<hr>";

    //Imprimir o conteudo que está ali.
    foreach($listaCompra as $item)
    {
        echo $item. " - " ;
    }
    echo "<hr>";

    $listaCompra[] = "Oleo";

    //Imprime o indice e os valores dentro da array.
    foreach($listaCompra as $indice => $item)
    {
        echo $indice." - ".$item;
        echo "<br>";
    }
    echo "<hr>";

    

    
