<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamentos\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamentos\EstadoOrcamento;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct(int $quantidadeItens, float $valor, EstadoOrcamento $estadoAtual = new EmAprovacao())
    {
        $this->quantidadeItens = $quantidadeItens;
        $this->valor = $valor;
        $this->estadoAtual = $estadoAtual;
    }


    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }
    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }
    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }



}
