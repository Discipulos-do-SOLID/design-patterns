<?php

namespace App;

abstract class Vehicle
{
    protected string $color;
    protected int $numberOfWheels;
    protected string $board;
    protected string $year;
    protected \DateTime $createdAt;
    public function __construct(string $color, int $numberOfWheels, string $board, string $year)
    {
        $this->color = $color;
        $this->numberOfWheels = $numberOfWheels;
        $this->board = $board;
        $this->year = $year;
        $this->createdAt = new \DateTime();
    }

    public function __clone()
    {
        $this->board = "Cloning of: " . $this->board;
        $this->createdAt = new \DateTime();
    }

    public function __toString()
    {
        return "Rodas: {$this->numberOfWheels}  Cor: {$this->color} Ano: {$this->year}  Placa: {$this->board}";
    }
}
