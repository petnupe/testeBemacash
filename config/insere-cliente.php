<?php

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
echo $Cliente->getId();