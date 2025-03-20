<?php

// ACCESS MODIFIERS

/* 
Então qual é a importância dos Access Modifiers numa classe?

Cenário um:
Imagina que queres que a definição do $nome não possa ser direta.
Queres que exista uma espécie de validação antes que os objetos criados
a partir da classe possam aceitar o nome que queres definir.
*/

class Homem
{

    // propriedade privada. O seu acesso não é possível sem ser dentro da classe
    private $nome;

    function set_nome($n)
    {

        $nomes_proibidos = [
            'joao', 'carlos', 'miguel', 'joaquim'
        ];

        // verifica se $n pertence aos nomes proibidos
        if (in_array($n, $nomes_proibidos)) {
            return;
        }

        // se não pertence, define $nome com o valor de $n
        $this->nome = $n;
    }

    // para ir buscar o valor do nome...
    function get_nome()
    {
        return $this->nome;
    }
}


$a = new Homem();

$a->set_nome('joao');
echo 'O nome é: ' . $a->get_nome();    // vazio
echo '<br>';

$a->set_nome('antónio');
echo 'O nome é: ' . $a->get_nome();    // antónio
echo '<br>';

// Os access modifiers permitem-nos controlar de forma muito clara
// que informação e métodos estão disponíveis fora da classe.
// Esta filosofia é de extrema importância: uma classe só deve ter
// público aquilo que é absolutamente necessário.


