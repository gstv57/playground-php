<?php

namespace DataStructures;

function sum(array $array = []){
    if(count($array) == 0){
        return 0;
    }

    $first = $array[0];

    $remaining = array_slice($array, 1);

    return $first + sum($remaining);

}

echo sum([1,2,3,4,5]);