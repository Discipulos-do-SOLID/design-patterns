<?php

require_once "vendor/autoload.php";



// //////////////////
//  WIKIPEDIA = CRIA PAÍSES - QUE TEM DOIS TIPOS DE DESCRIÇÃO VERSÃO text OU VERSÃO HTML

interface WikiFactory
{
    public function createCountry(): Country;
    public function createState(): State;
    public function createCity(): City;
    public function createDistrict(): District;
}


abstract class District {
    protected $content = 'Sou um Distrito!';
    abstract function getSummary(): string;
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

        return new HtmlCountry;
    }
    public function createState(): State {
        return new HtmlState;
    }
    public function createCity(): City {
        return new HtmlCity;
    }
    public function createDistrict(): District
    {
        return new HtmlDistrict;
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

    public function createDistrict(): District
    {
        return new TextDistrict;
    }
}





class PdfComponentFactory implements WikiFactory {


    public function createCountry(): Country
    {
        return new PdfCountry();


    }

    public function createCity(): City
    {
        return new PdfCity();

    }

    public function createState(): State
    {
        return new PdfState();

    }
    public function createDistrict(): District
    {
        return new PdfDistrict();
    }

}


class PdfCountry extends Country {
    public function getSummary(): string
    {
        return 'PDF do País: ' . ' ' . $this->content . ' ';
    }
}

class PdfState extends State {
    public function getSummary(): string
    {
        return 'PDF do Estado: ' . ' ' . $this->content . ' ';
    }
}
class PdfCity extends City {
    public function getSummary(): string
    {
        return 'PDF do Município: ' . ' ' . $this->content . ' ';
    }
}

class PdfDistrict extends District {
    public function getSummary(): string
    {
        return 'PDF do Distrito: ' . ' ' . $this->content . ' ';
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

class HtmlDistrict extends District {
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

class TextDistrict extends District {
    public function getSummary(): string {
        return $this->content;
    }
}


/// Application

$factory = function ($type = 'text') {
    switch ($type) {
        case 'text': 
            return new TextComponentFactory();
        case 'html':
            return new HtmlComponentFactory();
        case 'pdf':
            return new PdfComponentFactory();
        default: throw new Error('Não tem essa configuração, seu loco.');
    }
};

$app = new App($factory('pdfnaoexiste'));
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
        $district = $this->factory->createDistrict();


        $countryWidget = $country->getSummary();
        $stateWidget = $state->getSummary();
        $cityWidget = $city->getSummary();
        $districtWidget = $district->getSummary();

        echo $countryWidget;
        echo $stateWidget;
        echo $cityWidget;
        echo $districtWidget;
    }
}

