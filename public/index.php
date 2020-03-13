<?php

require __DIR__ . '/../vendor/autoload.php';

use Beacash\Controller\InterfaceControladorRequisicao;

$caminho = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : null;
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
	$caminho = '/FormLogin';
}

$classeControladora = $rotas[$caminho];
$controlador = new $classeControladora();
$controlador->processaRequisicao();