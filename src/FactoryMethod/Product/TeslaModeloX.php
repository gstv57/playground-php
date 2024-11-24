<?php

namespace FactoryMethod\Product;

class TeslaModeloX implements CarroProduct
{
    public function acelerar()
    {
        echo "Tesla Model X acelerou" . PHP_EOL;
    }

    public function freiar()
    {
        echo "Tesla Model X freiou";
    }

    public function trocarMarcha()
    {
        echo "Tesla Model X trocou de marcha";
    }
}