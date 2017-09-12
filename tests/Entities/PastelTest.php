<?php

use TrayLabs\Pastelaria\Entities\Pastel;

class PastelTest extends PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $pastel = new Pastel('Pastel de Flango', 'flango', 4.50);
        $this->assertEquals('Pastel de Flango', $pastel->getNome());
        $this->assertEquals('flango', $pastel->getRecheio());
        $this->assertEquals('4,50', $pastel->getValor());
    }
}