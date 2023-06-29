<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;

class DadosExtrinsecosPedidos
{
    private string $nomeCliente;
    private DateTimeImmutable $dataFinalizacao;

    public function __construct(string $nomeCliente, DateTimeImmutable $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function nomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function dataFilizacao(): DateTimeImmutable
    {
        return $this->dataFinalizacao;
    }
}
