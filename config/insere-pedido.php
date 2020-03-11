<?php

use Bemacash\Entity\Cliente;
use Bemacash\Entity\Pedido;
use Bemacash\Helper\EntityManagerFactory;

require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();


$repoCliente = $entityManager->getRepository(Cliente::class);

$Cliente = $repoCliente->find(1);

$Pedido = new Pedido();
$Pedido->setCliente($Cliente);

$data = new DateTime(date('d-m-Y'));

$Pedido->setData_pedido($data);
$Pedido->setData_status($data);
$Pedido->setStatus('fechado');

$Cliente->addPedido($Pedido);
$entityManager->persist($Cliente);
$entityManager->flush();