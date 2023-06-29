<?php

use Alura\DesignPattern\CacheOrcamentoProxy;
use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$item1 = new ItemOrcamento();
$item1->valor = 300;
$item2 = new ItemOrcamento();
$item2->valor = 500;

$orcamento->addItem($item1);
$orcamento->addItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItemOrcamento();
$item3->valor = 300;
$orcamentoAntigo->addItem($item3);

$orcamento->addItem($orcamentoAntigo);

$orcamentoAindaMaisAntigo = new Orcamento();
$item4 = new ItemOrcamento();
$item4->valor = 400;
$item5 = new ItemORcamento();
$item5->valor = 150;
$orcamentoAindaMaisAntigo->addItem($item4);
$orcamentoAindaMaisAntigo->addItem($item5);
$orcamento->addItem($orcamentoAindaMaisAntigo);

$proxyCache = new CacheOrcamentoProxy($orcamento);

echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
