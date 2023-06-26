<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamentos\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamentos\EstadoOrcamento;

class Orcamento implements Orcavel
{
    private array $itens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->itens = [];
        $this->estadoAtual = new EmAprovacao();
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

    public function addItem(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            function(float $valorAcumulado, Orcavel $item) {
                return $item->valor() + $valorAcumulado;
            }, 0);
    }

}
