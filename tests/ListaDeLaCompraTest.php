<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaDeLaCompra;
use PHPUnit\Framework\TestCase;

class ListaDeLaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function addOneProcutLowCase()
    {
        $lista = new ListaDeLaCompra();

        $result = $lista->gestionarLista("añadir carne");

        $this->assertEquals("carne x1", $result);
    }

    /**
     * @test
     *
     */
    public function addOneProductAnyCase()
    {
        $lista = new ListaDeLaCompra();

        $result = $lista->gestionarLista("añadir cArNe");

        $this->assertEquals("carne x1", $result);

    }


}
