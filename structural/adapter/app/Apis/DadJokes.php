<?php

namespace App\Apis;

use GuzzleHttp\Client;

class DadJokes
{
    public function getJoke()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://us-central1-dadsofunny.cloudfunctions.net/DadJokes/random/jokes');
        $joke = $response->getBody()->getContents();

        return $joke; // JSON!
    }
}
