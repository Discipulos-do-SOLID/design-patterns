<?php

namespace App\Apis;

class DefaultJokes
{

  private $jokes = [
    ['O que é que a televisão foi fazer no dentista?', 'Tratamento de canal.'],
    ["O que é, o que é? Não se come, mas é bom para se comer.", 'O talher'],
    'Oi, meu nome é Jaqueline, eu tenho 12 anos e já namoro. Já o que??? Queline.',
    'Qual é a piada do pintinho caipira: "pir"'
  ];

    public function getJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
