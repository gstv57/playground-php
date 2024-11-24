<?php

namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{
    public function acelerar()
    {
        echo "Tesla Model S acelerou" . PHP_EOL;
    }

    public function freiar()
    {
        echo "Tesla Model S freiou";
    }

    public function trocarMarcha()
    {
        echo "Tesla Model S trocou de marcha";
    }
}