<?php

namespace FactoryMethod;

use FactoryMethod\Product\CarroProduct;
use FactoryMethod\Product\DodgeDart;
use FactoryMethod\Product\DogdeCharger;

class DodgeFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro == 'charger') {
            return new DogdeCharger();
        } elseif ($modeloCarro == 'dart') {
            return new DodgeDart();
        } else {
            throw new \Exception('Modelo de carro não existe');
        }
    }
}