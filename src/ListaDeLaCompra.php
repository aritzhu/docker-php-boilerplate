<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaDeLaCompra
{
    function gestionarLista(string $product):string
    {
        $nombreProducto = explode(" ", $product);
        return "$nombreProducto[1] x1";
    }

}
