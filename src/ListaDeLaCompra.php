<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaDeLaCompra
{
    function gestionarLista(string $product):string
    {
        $nombreProducto = explode(" ", $product);
        $lowcase_product = strtolower($nombreProducto[1]);
        return "$lowcase_product x1";
    }

}
