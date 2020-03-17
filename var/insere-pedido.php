<?php
echo PHP_EOL.'Inicialzando pedidos'.PHP_EOL;
use Bemacash\Entity\Cliente;
use Bemacash\Entity\Contrato;
use Bemacash\Entity\Pedido;
use Bemacash\Helper\EntityManagerFactory;

require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();

$repoCliente  = $entityManager->getRepository(Cliente::class);
$repoContrato = $entityManager->getRepository(Contrato::class);

for($i = 1; $i < 15; $i++) {

    $id = 1;

    if(($i % 2) == 0) {
        $id = 2;
    }

  $Pedido = new Pedido();
  $Pedido->setCliente($repoCliente->find($id));
  $data = new DateTime(date('d-m-Y'));
  $Pedido->setData($data);
  $Pedido->setContrato($repoContrato->find(rand(1,2)));
  $entityManager->persist($Pedido);
  $entityManager->flush();
  echo $Pedido->getId().PHP_EOL;
}