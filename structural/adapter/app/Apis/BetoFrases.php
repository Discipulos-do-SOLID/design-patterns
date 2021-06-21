<?php

namespace App\Apis;

use GuzzleHttp\Client;

class BetoFrases
{
    public function getJoke()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://testefunctionsbeto.azurewebsites.net/api/frases-api');
        $joke = $response->getBody()->getContents();

        return $joke; // JSON!
    }
}
