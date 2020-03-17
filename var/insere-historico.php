<?php

use Bemacash\Entity\Historico;
use Bemacash\Entity\Pedido;
use Bemacash\Entity\Status;
use Bemacash\Helper\EntityManagerFactory;

echo PHP_EOL.'Inicialzando historicos'.PHP_EOL;

require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();
$repoPedidos = $entityManager->getRepository(Pedido::class);
$repoStatus  = array_map('mb_strtoupper', ['aberto', 'faturado', 'finalizado','cancelado']);;

$pedidos = $repoPedidos->findAll();

foreach ($pedidos as $pedido) {
    for($i = 1; $i < 5; $i++) {
        $Historico = new Historico();
        $Historico->setStatus($repoStatus[rand(0, 3)]);
        $Historico->setPedido($pedido);
        
        $data = new DateTime(date('d-m-Y'));
        $Historico->setData($data);
        
        echo $Historico->getPedido()->getId().PHP_EOL;
        $Historico->getPedido()->addHistorico($Historico);
        
        $entityManager->persist($Historico);
        $entityManager->flush();
    }
}