<?php 

namespace App\Builders\Business;

use App\Builders\Entity\Pizza;
use App\Builders\Entity\Config;
use App\Builders\Base\Tamanho;

class Media implements Tamanho
{

    function getTamanho(): string
    {
        return 'Media';
    }

    function calcularValor(Pizza $pizza):float
    {
        $valor = 0;
        if($pizza->getBorda()) {
            $valor += Config::VALOR_MASSA_MEDIA;
        }
        
        $valor += count($pizza->getIngredientes()) * Config::VALOR_INGREDIENTES + Config::VALOR_MASSA_MEDIA;
        
        return $valor;
    }
}