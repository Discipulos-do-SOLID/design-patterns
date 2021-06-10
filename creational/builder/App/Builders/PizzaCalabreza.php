<?php

namespace App\Builders;

use App\Builders\Base\PizzaBuild;
use App\Builders\Base\Tamanho;
use App\Builders\Entity\Pizza;

class PizzaCalabreza implements PizzaBuild
{   

    private $pizza = null;
    private $tamanho = null;

    function __construct(Tamanho $tamanho)
    {
        $this->pizza = new Pizza();
        $this->tamanho = $tamanho;
    }

    function borda($borda):PizzaCalabreza
    {
        $this->pizza->setBorda($borda);
        return $this;
    }

    function ingredientes():PizzaCalabreza
    {
        $this->pizza->setSabor("Calabresa");
        $this->pizza->setIngredientes([
            'Calabresa',
            'Cebola',
            'Ovo',
            'Queijo'
            ]);
            return $this;
    }

    function valor()
    {
        $this->pizza->setValor($this->tamanho->calcularValor($this->pizza));
    }

    function tamanho():PizzaCalabreza
    {
        $this->pizza->setTamanho($this->tamanho->getTamanho());
        return $this;
    }

    function getPizza():Pizza
    {
        return $this->pizza;
    }
}