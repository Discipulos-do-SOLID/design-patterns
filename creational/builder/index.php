<?php 

include __DIR__."/vendor/autoload.php";

use App\Builders\Business\Pequena;
use App\Builders\PizzaCalabreza;
use App\Builders\PizzaPrestigio;
use App\Builders\Business\Grande;
use App\Director\Menu;

$pizzaCalabreza = new PizzaCalabreza(new Pequena);
$pizzaPrestigio = new PizzaPrestigio(new Grande);

$menu = new Menu();
$menu->pizzaComBorda($pizzaCalabreza);
$menu->pizzaSemBorda($pizzaPrestigio);

dd($pizzaCalabreza->getPizza(), $pizzaPrestigio->getPizza());