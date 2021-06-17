<?php

namespace App;

class Car extends Vehicle
{
    private int $numberOfGears;

    public function setNumberOfGears(int $gears): void
    {
        $this->numberOfGears = $gears;
    }

    public function getNumberOfGears(): int
    {
        return $this->numberOfGears;
    }

    public function __toString()
    {
        return  parent::__toString() . " Marchar: {$this->getNumberOfGears()}" . PHP_EOL;
    }
}
