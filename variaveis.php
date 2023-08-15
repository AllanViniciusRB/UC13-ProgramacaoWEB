<?php 

$nomeCompleto = 'Allan Vinicius Ribeiro de Almeida';
$idade = 40;
$status = true;
$salario = 1500.00;

//Insere uma quebra de linha como se fosse uma linha
echo "<hr>";

echo $nomeCompleto;
echo "<hr>";

//Converte em maisculo
echo strtoupper($nomeCompleto);
echo "<hr>";

//Converte em minusculo
echo strtolower($nomeCompleto);
echo "<hr>";

//Converte a primeira letra das palavras em maisculo
echo ucwords($nomeCompleto);
echo "<hr>";

//Substituir uma palava pela outra em uma frase ou texto.
//1°Oque eu quero pegar
//2°O que eu quero substituir
//3°De onde eu vou pegar? A variavel.
echo str_replace("Ribeiro", "Vinicius",$nomeCompleto);
echo "<hr>";

//Comando para repetir o for digitado quantas vezes eu desejar
//1°O que eu quero repetir
//2°Quantidade
echo str_repeat("( ͡° ͜ʖ ͡°) ", 5);
echo "<hr>";

//Comando para verificar se é falso ou verdadeiro
// ? = se e senão 
echo isset($nomeCompleto) ? 'True':'False';
echo "<hr>";

//" Empty " seria vazio. 
echo empty($nomeCompleto) ? 'True':'False';



