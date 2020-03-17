<?php
echo PHP_EOL.'Inicialzando status'.PHP_EOL;
use Bemacash\Entity\Status;
use Bemacash\Helper\EntityManagerFactory;

require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();
$status = array_map('mb_strtoupper', ['aberto', 'faturado', 'finalizado','cancelado']);

foreach($status as $sta) {
    
    $Status = new Status();
    $Status->setDescricao($sta);
    $entityManager->persist($Status);
    $entityManager->flush();
    echo $sta . ' - ' .$Status->getId() . PHP_EOL;
}
echo PHP_EOL;