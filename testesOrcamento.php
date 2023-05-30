<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\{Icms, Iss};
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

//$calculadora = new CalculadoraDeImpostos();
//
//$orcamento = new Orcamento();
//$orcamento->valor = 100;
//
//echo $calculadora->calcula($orcamento, new Iss());

$calculadora = new \Alura\DesignPattern\CalculadoraDeDescontos();

$orcamento = new ORcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;
var_dump($orcamento);

$desconto = $calculadora->calculaDesconto($orcamento);

$orcamento->valor -= $desconto;
var_dump($orcamento->valor);
