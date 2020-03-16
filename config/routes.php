<?php

use Bemacash\Controller\{FormLogin, ListarPedidos, Login};
use Bemacash\Services\DetalhePedido;
return [
    '/FormLogin' => FormLogin::class,
    '/Login' => Login::class,
    '/ListarPedidos' => ListarPedidos::class,
    '' => FormLogin::class,
    '/DetalhePedido' => DetalhePedido::class
];