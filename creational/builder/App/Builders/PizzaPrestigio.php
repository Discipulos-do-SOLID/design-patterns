<?php

namespace App\Builders;

use App\Builders\Base\PizzaBuild;
use App\Builders\Base\Tamanho;
use App\Builders\Entity\Pizza;

class PizzaPrestigio implements PizzaBuild
{   
    private $pizza = null;
    private $tamanho = null;

    function __construct(Tamanho $tamanho)
    {
        $this->pizza = new Pizza();
        $this->tamanho = $tamanho;
    }

    function borda($borda):PizzaPrestigio
    {
        $this->pizza->setBorda($borda);
        return $this;
    }

    function ingredientes():PizzaPrestigio
    {
        $this->pizza->setSabor("Prestigio");
        $this->pizza->setIngredientes([
            'Chocolate',
            'Queijo',
            'Brigadeiro',
            'Colo Ralado'
            ]);
            return $this;
    }

    function valor()
    {
        $this->pizza->setValor($this->tamanho->calcularValor($this->pizza));
    }

    function tamanho():PizzaPrestigio
    {
        $this->pizza->setTamanho($this->tamanho->getTamanho());
        
        return $this;
    }

    function getPizza():Pizza
    {
        return $this->pizza;
    }
}