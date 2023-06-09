<?php

require "vendor/autoload.php";

use Alura\DesignPattern\AcessoAoGerarPedido\CriaPedidoNoBanco;
use Alura\DesignPattern\AcessoAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->attach( new CriaPedidoNoBanco());
$gerarPedidoHandler->attach( new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);

