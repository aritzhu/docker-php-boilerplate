<?php

namespace Deg540\DockerPHPBoilerplate;

use function Sodium\add;

class ListaDeLaCompra
{
    public $lista = [];

    function gestionarLista(string $product):string
    {

        $producto_exploded = explode(" ", $product);

        if(count($producto_exploded) == 2){
            $num = 1;
        }else{
            $num = intval($producto_exploded[2]);
        }

        $lowcase_product = strtolower($producto_exploded[1]);
        array_push($this->lista, "$lowcase_product x$num\n");

        return implode($this->lista);
    }

}
