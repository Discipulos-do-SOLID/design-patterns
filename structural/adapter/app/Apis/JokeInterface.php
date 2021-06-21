<?php

namespace App\Apis;

interface JokeInterface
{
    public function getJoke(): string | array;
}
