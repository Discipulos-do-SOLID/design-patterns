<?php

namespace App;

use App\Apis\DefaultJokes;
use App\Apis\JokeInterface;

class JokeGenerator
{
    protected $jokeProvider;

    public function __construct(JokeInterface $jokeProvider = null)
    {
        if (!$jokeProvider) {
            $this->jokeProvider = new DefaultJokes;
        } else {
            $this->jokeProvider = $jokeProvider;
        }
    }


    public function getJoke()
    {
        $joke = $this->jokeProvider->getJoke();
        // O formato que recebe pode ser string OU um array de 2 itens. 

        if (is_array($joke)) {
            return $this->formatJokeWithPuchline($joke);
        }
        return $joke;
    }

  
    private function formatJokeWithPuchline($joke)
    {
        return "PERGUNTA: $joke[0] \nRESPOSTA: $joke[1]";
    }
}
