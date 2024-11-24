<?php
require 'vendor/autoload.php';

use Singleton\LogsSingleton;

$instacia = LogsSingleton::obterInstancia();

$dados = [
    'data' => date('d-m-Y H:i:s'),
];

$instacia->gravarLog($dados);