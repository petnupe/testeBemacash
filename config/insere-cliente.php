<?php
echo PHP_EOL.'Inicialzando clientes'.PHP_EOL;
use Bemacash\Entity\Cliente;
use Bemacash\Helper\EntityManagerFactory;

require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();

$Cliente = new Cliente();
$Cliente->setNome('Peterson Pedroso');
$Cliente->setEmail('peterson@tecbiz.com.br');
$Cliente->setPassword(password_hash('123456', PASSWORD_DEFAULT));
$entityManager->persist($Cliente);
$entityManager->flush();
echo $Cliente->getId().PHP_EOL;

$Cliente = new Cliente();
$Cliente->setNome('Tais Oliveira');
$Cliente->setEmail('tfopnp@gmail.com');
$Cliente->setPassword(password_hash('654321', PASSWORD_DEFAULT));
$entityManager->persist($Cliente);
$entityManager->flush();
echo $Cliente->getId() . PHP_EOL;