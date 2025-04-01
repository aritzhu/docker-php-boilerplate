<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaDeLaCompra;
use PHPUnit\Framework\TestCase;

class ListaDeLaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function oneProductSendOneProductShowed()
    {
        $lista = new ListaDeLaCompra();

        $result = $lista->gestionarLista("carne");

        $this->assertEquals("carne", $result);
    }



}
