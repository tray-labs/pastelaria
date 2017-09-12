<?php

namespace TrayLabs\Pastelaria\Helpers;

class Formatador
{
    /**
     * Formata moeda no padrao americano para o brasileiro
     *
     * @param float $valor
     * @return string
     */
    public static function emMoedaPtBr($valor)
    {
        return number_format($valor, 2, ',', '');
    }
}