<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new ORcamentoExportado($orcamento);
$orcamentoXmlExportar  = new ArquivoZipExportado('Orcamento.array');

echo $orcamentoXmlExportar->salvar($orcamentoExportado);
