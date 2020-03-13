<?php
echo PHP_EOL.'Inicialzando contratos'.PHP_EOL;
use Bemacash\Entity\Contrato;
use Bemacash\Helper\EntityManagerFactory;

require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();


$Contrato = new Contrato();
$Contrato->setDescricao('BEMACASH VESTUARIO NFC-e + IMPRESSORA + GAVETA');
$entityManager->persist($Contrato);
$entityManager->flush();
echo $Contrato->getId();
echo PHP_EOL;
$Contrato = new Contrato();
$Contrato->setDescricao('BEMACASH COMERCIO NFC-e + IMPRESSORA + GAVETA + LEITOR');
$entityManager->persist($Contrato);
$entityManager->flush();
echo $Contrato->getId();