<?php 

class Pessoa
{
    public $nome;
    public $idade;
    public $sexo;

    public function andar($parado = 'n')
    {
        if($parado == 'n')
            return $this->nome . ' está andando';
    }
}

$pessoa = new Pessoa();
$pessoa->nome  = 'Usuário Teste';
$pessoa->idade = 30;
$pessoa->sexo  =  'M';

$pessoa2 = new Pessoa();
$pessoa2->nome  = 'Usuário Teste 2';
$pessoa2->idade = 35;
$pessoa2->sexo  =  'F';

print $pessoa->andar();

//printf('%s têm %d anos', $pessoa->nome, $pessoa->idade);
// print $pessoa->nome . ' têm ' . $pessoa->idade . ' anos';
// print '<hr>';
// print $pessoa2->nome . ' têm ' . $pessoa2->idade . ' anos';