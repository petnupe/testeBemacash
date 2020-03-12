<?php

use Bemacash\Controller\{FormLogin, ListarPedidos, Login};

return [
    '/FormLogin' => FormLogin::class,
    '/Login' => Login::class,
    '/ListarPedidos' => ListarPedidos::class,
    '' => FormLogin::class
];