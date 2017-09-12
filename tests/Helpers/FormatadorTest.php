<?php

use TrayLabs\Pastelaria\Helpers\Formatador;

class FormatadorTest extends PHPUnit_Framework_TestCase
{
    public function testMetodoParaFormatarMoeda()
    {
        $this->assertEquals('1234,56', Formatador::emMoedaPtBr(1234.56));
    }
}