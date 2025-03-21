<?php


/* 

A palavra-chave $this refere-se ao objeto atual
e só está disponível dentro dos métodos (funções da classe)
*/

class Fruto
{
    public $nome;
    public $cor;
    public $peso;

    public function apresentar_fruto()
    {
        return "O meu nome é {$this->nome}, a minha cor é {$this->cor} e tenho {$this->peso} gramas de peso.";
    }
}

$laranja = new Fruto();
$laranja->nome = 'Laranja';
$laranja->cor = 'laranja';
$laranja->peso = '125';

$banana = new Fruto();
$banana->nome = 'Banana';
$banana->cor = 'amarela';
$banana->peso = '178';

echo $laranja->apresentar_fruto();
echo '<br>';
echo $banana->apresentar_fruto();
