<?php 

namespace App\Builders\Entity;

class Pizza
{
    private string $sabor;
    private string $borda;
    private array $ingredientes;
    private string $valor;
    private string $tamanho;

    public function setSabor(string $sabor)
    {
        $this->sabor = $sabor;
    }

    public function getSabor()
    {
        return $this->sabor;
    }

    public function setBorda(string $borda)
    {
        $this->borda = $borda;
    }

    public function getBorda()
    {
        return $this->borda;
    }

    public function setIngredientes(array $ingredientes)
    {
        $this->ingredientes = $ingredientes;
    }

    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    public function setValor(string $valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setTamanho(string $tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function getTamanho()
    {
        return $this->tamanho;
    }

}