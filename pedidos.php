<?php

use Alura\DesignPattern\DadosExtrinsecosPedidos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require 'vendor/autoload.php';

$pedidos = [];
$dados = new DadosExtrinsecosPedidos(
    md5('a'),
    new \DateTimeImmutable()
);

for ($index = 0; $index < 10000; $index++) {
    $pedido = new Pedido();
    $pedido->orcamento = new Orcamento();
    $pedido->dados = $dados;

    $pedidos[] = $pedido;
}
echo memory_get_peak_usage();
