<?php
////////////////////////////////////////////////////
$nome = "Jorgin do Peneu";
$email = "AllanVinicius_dev1@outlook.com";
$senha = "123456789";
$idade = "62";

echo "<h1> Estrutura Condicional </h1>";

echo("<h3>Exemplos de if() </h3>");
////////////////////////////////////////////////////
if($idade >= 18){
    echo "O usuário $nome <hr> é maior de idade";
}
//////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplos de if e Else </5>";
echo "<hr>";
////////////////////////////////////////////////////
if($senha == "123456789")
{
    echo "A senha é válida!";
}
else
{
    echo "Senha inválida";
}
echo "<hr>";
////////////////////////////////////////////////////
echo "<h3> Exemplos de if e ElseIf else </h3>";
echo "<hr>";

if ($idade <= 18){
    echo "Jovem";
}
else if($idade <=21){
    echo "Adulto";
}
else if ($idade > 60){
    echo "Ta berando a cova ein";
}
///////////////////////////////////////////////////////
echo "<h3> Exemplos de If ternário </h3>";
echo "<hr>";
echo ($idade >=18) ? "Maior de idade" : "Menor de idade";
///////////////////////////////////////////////////////
echo "<hr>";
echo "<h3> Exemplos de condição para formulário de login </h3>";
echo "<hr>";

if($email == "AllanVinicius_dev1@outlook.com" && $senha == "123456789"){
    echo "Usuário autenticado";
}
else{
    echo "usuário ou senha inválida";
}
////////////////////////////////////////////////////////
echo "<hr>";

$numero = 10;

if($numero % 2 == 0){
    echo "O numero $numero é par";
}
else{
    echo "O numero $numero é impar";
}
/////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3> Mostre o dia da Semana </h3>";

echo date('w');

 $dia = date('w');
echo "<hr>";
if($dia ==0){
    echo "Domgino";
}else if($dia ==1){
    echo "Segunda-feira";
}if($dia == 2){
    echo "Terça-Feira";
}else if($dia == 3){
    echo "Quarta-feira";
}if($dia == 4){
    echo "Quinta-Feira";
}else if($dia == 5){
    echo "Sexta-feira";
}else if($dia == 6){
    echo "Sabádo";
}
echo "<hr>";



