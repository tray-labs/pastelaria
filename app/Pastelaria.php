<?php

namespace TrayLabs\Pastelaria;

use TrayLabs\Pastelaria\Entities\Pastel;

class Pastelaria
{
    /**
     * Inicia o sistema de pastelaria
     *
     * @return void
     */
    public function iniciarAplicacao()
    {
        $dados = [
            [
                'nome'    => 'Pastel de Flango',
                'recheio' => 'flango',
                'valor'   => 4.50,
            ],
            [
                'nome'    => 'Pastel de Quezo',
                'recheio' => 'quezo',
                'valor'   => 4.90,
            ],
        ];

        $pasteis = [];

        foreach ($dados as $dado) {
            $pasteis[] = new Pastel($dado['nome'], $dado['recheio'], $dado['valor']);
        }

        include __DIR__ . '/../views/pasteis/index.php';
    }
}