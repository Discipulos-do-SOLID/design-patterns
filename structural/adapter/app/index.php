<?php

use App\Apis\DadJokes;
use App\Apis\ChucknorrisJokes;
use App\JokeGenerator;

require_once "vendor/autoload.php";

$dadJokeApi = new DadJokes;
$ChucknorrisJokeApi = new ChucknorrisJokes;


// Posso inicializar o meu gerador de piadas
// sem nada (default Jokes), ou com "dad jokes" ou com chucknorris. 

$generator = new JokeGenerator();
$piada1 = $generator->getJoke();

// O problema é que não está funcionando Chucknorris nem DadJokes

printf ($piada1);
print "\n";
