<?php 

namespace App\Director;

use App\Builders\Base\PizzaBuild;

class Menu
{

    public function pizzaComBorda(PizzaBuild $pizza)
    { 
        $pizza->Borda(true)
        ->Ingredientes()
        ->Tamanho()
        ->Valor();
    }

    public function pizzaSemBorda(PizzaBuild $pizza)
    { 
        $pizza->Borda(false)
        ->Ingredientes()
        ->Tamanho()
        ->Valor();
    }
    
}