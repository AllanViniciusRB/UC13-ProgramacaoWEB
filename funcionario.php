<?php

$listaFuncionarios = [
    1 => [
        "id" => 1,
        "nome" => "Allan Vinicius",
        "email" => "AllanzindoPeneu@hotmail.com",
        "telefone" => "(14) 9984-67286"
    ],
    2 => [
        "id" => 2,
        "nome" =>"Anna Beatriz",
        "email" => "annabeatriz@gmail.com",
        "telefone" => "(21) 7121-20323"
    ],
    3 => [
        "id" => 3,
        "nome" =>"Joaozin",
        "email" => "jaao@gmail.com",
        "telefone" => "(21) 4444-4444"
    ]
    
];

// var_dump($listaFuncionarios);


//Adicionando item no array pronto
$listaFuncionarios[4]["id"] = 4;
$listaFuncionarios[4]["nome"] = "Allan";
$listaFuncionarios[4]["email"] = "asokapsoka@gmail.com";
$listaFuncionarios[4]["telefone"] = "(14) 8777- 8888";

// var_dump($listaFuncionarios);




$qtdeFuncionario = count($listaFuncionarios);

//Contagem de quantos itens tem no array.
$listaFuncionarios[$qtdeFuncionario]["id"] = 4;
$listaFuncionarios[$qtdeFuncionario]["nome"] = "Allan";
$listaFuncionarios[$qtdeFuncionario]["email"] = "asokapsoka@gmail.com";
$listaFuncionarios[$qtdeFuncionario]["telefone"] = "(14) 8777- 8888";

// print var_dump($listaFuncionarios);
// echo "A quantidade é ".count($listaFuncionarios);
?>

