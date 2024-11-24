<?php

namespace FactoryMethod\Product;

class DogdeCharger implements CarroProduct
{
    public function acelerar()
    {
        echo "Dogde Charger acelerou" . PHP_EOL;
    }

    public function freiar()
    {
        echo "Dogde Charger freiou";
    }

    public function trocarMarcha()
    {
        echo "Dogde Charger trocou de marcha";
    }
}