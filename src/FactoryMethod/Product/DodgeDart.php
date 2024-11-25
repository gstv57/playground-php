<?php

namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
    public function acelerar()
    {
        echo "Dodge Dart acelerou" . PHP_EOL;
    }

    public function freiar()
    {
        echo "Dodge Dart freiou" . PHP_EOL;
    }

    public function trocarMarcha()
    {
        echo "Dodge Dart trocou de marcha" . PHP_EOL;
    }
}