<?php 

//Public, Protected & Private
class Empregado
{
    private $nome;
    private $cargo;
    private $setor;

    public function __construct($nome, $cargo, $setor)
    {
        $this->nome  = $nome;
        $this->cargo = $cargo;
        $this->setor = $setor;
    }

    public function __destruct()
    {
        print '<br>Método destrutor foi executado...';
    }

    public function __toString()
    {
        return '<br> Você tentou printar esta classe!';
    }

    public function info()
    {
        printf(
            '%s é %s no setor %s', 
            $this->nome, 
            $this->cargo,
            $this->setor
        ); 
    }
}

class Programador extends Empregado
{
    
}

$programador = new Empregado('Dev 1', 'Programador', 'Desenvolvimento');
$programador->info();

print $programador;
//métodos mágicos  __construct __destruct