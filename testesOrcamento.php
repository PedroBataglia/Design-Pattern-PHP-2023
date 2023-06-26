<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\{Icms, Iss};
use Alura\DesignPattern\Orcamento;
use \Alura\DesignPattern\CalculadoraDeDescontos;


require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();
//
$orcamento = new Orcamento();
$orcamento->valor = 100;
//
 echo $calculadora->calcula($orcamento, new Iss(new Icms()));
//
//$calculadora = new CalculadoraDeDescontos();
//
//$orcamento = new Orcamento();
//$orcamento->valor = 700;
//$orcamento->quantidadeItens = 5;
//var_dump($orcamento);
//
//$desconto = $calculadora->calculaDesconto($orcamento);
//
//$orcamento->valor -= $desconto;
//var_dump($orcamento->valor);
