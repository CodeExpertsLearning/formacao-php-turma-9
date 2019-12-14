<?php

class Conta
{
    private $saldo;

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        if($valor > $this->saldo){
            throw new Exception("Impossivel realizar saque!");
        }

        $this->saldo -= $valor;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}

$conta = new Conta();
$conta->depositar(200);

print $conta->getSaldo();
print '<br>';

$conta->depositar(20);

print $conta->getSaldo();
print '<br>';

print $conta->getSaldo();
