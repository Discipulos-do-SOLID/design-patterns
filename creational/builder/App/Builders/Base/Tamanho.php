<?php 

namespace App\Builders\Base;

use App\Builders\Entity\Pizza;

interface Tamanho
{
    function getTamanho():string;
    function calcularValor(Pizza $pizza):float;
}