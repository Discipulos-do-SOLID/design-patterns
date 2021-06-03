<?php

require_once "../vendor/autoload.php";



// //////////////////
//  WIKIPEDIA = CRIA PAÍSES - QUE TEM DOIS TIPOS DE DESCRIÇÃO VERSÃO text OU VERSÃO HTML

interface WikiFactory
{
    public function createCountry(): Country;
    public function createState(): State;
    public function createCity(): City;
}


abstract class Country
{
    protected $content = 'Olá, sou um país.';
    abstract function getSummary(): string;
}

abstract class State
{
    protected $content = 'Olá, sou um estado.';

    abstract public function getSummary();
}

abstract class City
{
    protected $content = 'Olá, sou uma cidade.';

    abstract public function getSummary();
}


class HtmlComponentFactory implements WikiFactory
{
    public function createCountry(): Country {

        $country = new HtmlCountry;
        return $country;
    }
    public function createState(): State {
        $state = new HtmlState;
        return $state;

    }
    public function createCity(): City {
        $city = new HtmlCity;
        return $city;
    }
}

class TextComponentFactory implements WikiFactory
{
    public function createCountry(): Country {

        $country = new TextCountry;
        return $country;
    }
    public function createState(): State {
        $state = new TextState;
        return $state;

    }
    public function createCity(): City {
        $city = new TextCity;
        return $city;
    }
}



class HtmlCountry extends Country {
    public function getSummary(): string {
        return '<h1>'. $this->content . '</h1>';
    }
}

class HtmlState extends State {
    public function getSummary(): string {
        return '<h1>'. $this->content . '</h1>';
    }
}

class HtmlCity extends City {
    public function getSummary(): string {
        return '<h1>'. $this->content . '</h1>';
    }
}

class TextCountry extends Country {
    public function getSummary(): string {
        return $this->content;
    }
}

class TextState extends State {
    public function getSummary(): string {
        return $this->content;
    }
}

class TextCity extends City {
    public function getSummary(): string {
        return $this->content;
    }
}




/// Application

$config = 'text';

if ($config === 'text') {
    $factory = new TextComponentFactory();
} else {
    $factory = new HtmlComponentFactory();
}

$app = new App($factory);
$app->createWiki();

class App {
    protected $factory;


    public function __construct($factory)
    {
        $this->factory = $factory;
    }

    public function createWiki() {
        $country = $this->factory->createCountry();
        $state = $this->factory->createState();
        $city = $this->factory->createCity();


        $countryWidget = $country->getSummary();
        $stateWidget = $state->getSummary();
        $cityWidget = $city->getSummary();
        echo $countryWidget;
        echo $stateWidget;
        echo $cityWidget;
    }
}

