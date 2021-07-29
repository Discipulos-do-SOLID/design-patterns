<?php

// Um sistema de hambúrguer que calcula o preço dependendo do que é adicionado ao sanduíche. 
// Hamburguer -> 5,00
// Queijo -> 2,00
// Molho Barbecue -> 1,5
// Molho Tarê -> 2,00
// Ovo -> 0,50


// Component
class Hamburguer implements FoodItemInterface
{
    public function price()
    {
        return 5;
    }
}

// Interface
interface FoodItemInterface
{
    public function price();
}


// Base Decorator (opcional)
abstract class FoodItem implements FoodItemInterface
{
    protected FoodItemInterface $item;
  
    public function __construct(FoodItemInterface $item)
    {
        $this->item = $item;
    }

    public function price()
    {
        return $this->item->price();
    }
}

// Decorator
class Cheese extends FoodItem implements FoodItemInterface
{
    public function price()
    {
        $initialPrice = parent::price();
  
        return $initialPrice + 2;
    }
}

// Decorator
class Egg extends FoodItem implements FoodItemInterface
{
    public function price()
    {
        $initialPrice = parent::price();
  
        return $initialPrice + 1;
    }
}




// Client Code
$hamburguer = new Hamburguer;
print('Preço do hamburguer = ' . $hamburguer->price(). PHP_EOL);

//Cheeseburguer
$cheeseburger = new Cheese($hamburguer);
print('Preço do cheeseburguer = ' . $cheeseburger->price().PHP_EOL);


// Hamburguer com Ovo
$hamburgerEgg = new Egg($hamburguer);
print('Preço do hamburguer EGG = ' . $hamburgerEgg->price() .PHP_EOL);

// Cheeseburguer com Ovo
$cheeseburgerEgg = new Egg($cheeseburger);
print('Preço do cheeseburguer EGG = ' . $cheeseburgerEgg->price().PHP_EOL);
