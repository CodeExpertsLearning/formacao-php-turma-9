<?php

class Animal
{
    public function som()
    {
        return 'Som do animal';
    }
}

class Cachorro extends Animal 
{

    public function som()
    {
        return 'Som do cachorro';
    }

}

class Gato extends Animal 
{

    public function som()
    {
        return 'Som do gato';
    }
}

$animal = new Gato();
print $animal->som();