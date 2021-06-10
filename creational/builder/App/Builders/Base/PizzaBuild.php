<?php 

namespace App\Builders\Base;

use App\Builders\Business\iTamanhos;
use App\Builders\Entity\Pizza;

interface PizzaBuild
{
    function borda(bool $borda);
    function ingredientes();
    function valor();
    function getPizza():Pizza;
    function tamanho();
}