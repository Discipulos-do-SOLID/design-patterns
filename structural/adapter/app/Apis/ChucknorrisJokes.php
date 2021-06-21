<?php

namespace App\Apis;

use GuzzleHttp\Client;

class ChucknorrisJokes
{
    public function getJoke()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.chucknorris.io/jokes/random');
        $joke = $response->getBody()->getContents();

        return $joke; // formato JSON!
    }
}
