<?php

use Alura\DisignPattern\CalculadoraDeImpostos;
use Alura\DisignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, "ISS");
