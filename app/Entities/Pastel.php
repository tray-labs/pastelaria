<?php

namespace TrayLabs\Pastelaria\Entities;

class Pastel
{
    /**
     * @var string Nome do Pastel
     */
    protected $nome;

    /**
     * @var string Recheio do Pastel
     */
    protected $recheio;

    /**
     * @var float Valor para venda
     */
    protected $valor;

    /**
     * Método construtor
     *
     * @param string $nome Nome do pastel
     * @param string $recheio Recheio do pastel
     * @param float $valor Valor de venda
     * @return void
     */
    public function __construct($nome, $recheio, $valor)
    {
        $this->nome    = $nome;
        $this->recheio = $recheio;
        $this->valor   = $valor;
    }

    /**
     * Recupera o nome do pastel
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Recupera o recheio do pastel
     *
     * @return string
     */
    public function getRecheio()
    {
        return $this->recheio;
    }

    /**
     * Recupera o valor do pastel
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }
}