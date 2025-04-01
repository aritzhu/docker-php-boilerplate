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

        $this->assertEquals("carne x1\n", $result);
    }

    /**
     * @test
     *
     */
    public function addOneProductAnyCase()
    {
        $lista = new ListaDeLaCompra();

        $result = $lista->gestionarLista("añadir cArNe");

        $this->assertEquals("carne x1\n", $result);

    }

    /**
     * @test
     *
     */
    public function addOneProductAndNumberAnyCase()
    {
        $lista = new ListaDeLaCompra();

        $result = $lista->gestionarLista("añadir cArNe 4");

        $this->assertEquals("carne x4\n", $result);
    }

    /**
     * @test
     *
     */
    public function addProductsToList()
    {
        $lista = new ListaDeLaCompra();

        $result = $lista->gestionarLista("añadir cArNe 4");

        $this->assertEquals("carne x4\n", $result);

    }

    /**
     * @test
     *
     */
    public function addManyProductsTolist()
    {
        $lista = new ListaDeLaCompra();

        $result = $lista->gestionarLista("añadir cArNe 4");
        $result = $lista->gestionarLista("añadir cArNe 4");
        $this->assertEquals("carne x4\ncarne x4\n", $result);
    }


}
