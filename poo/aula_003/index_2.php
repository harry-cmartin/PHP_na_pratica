<?php


class Fruto
{
    // propriedades
    public $nome;
}

$laranja = new Fruto();

$laranja->nome = "Laranja";

$ananas = new Fruto();
$ananas->nome = 'Ananás';


echo $laranja->nome;
echo '<br>';
echo $ananas->nome;

// cada objeto criado a partir da mesma classe, contém as suas propriedades
// de forma completamente independente.