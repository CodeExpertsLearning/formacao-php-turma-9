<?php 

class Empregado
{
    public $nome;
    public $cargo;
    public $setor;
}

class Programador extends Empregado
{
    public $cargo = 'Programador';
    public $setor = 'Desenvolvimento';
}

class Analista extends Empregado
{
    public $cargo = 'Programador';
    public $setor = 'Desenvolvimento';
}

$programador = new Programador();
$programador->nome = 'Dev Test';

printf(
    '%s é %s no setor %s', 
    $programador->nome, 
    $programador->cargo,
    $programador->setor
);