<?php

abstract class Entidade
{
    public function inserir()
    {
        return 'Inserido no banco...';
    }

    abstract public function serialize();
}

class Produto extends Entidade
{
    public function serialize()
    {
        return json_encode(['serializado']);
    }
}


print (new Produto())->serialize();

