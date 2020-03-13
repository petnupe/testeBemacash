<?php
echo PHP_EOL.'Inicialzando clientes'.PHP_EOL;
use Bemacash\Entity\Cliente;
use Bemacash\Helper\EntityManagerFactory;

require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();

$Cliente = new Cliente();
$Cliente->setNome('Cliente Teste');
$Cliente->setEmail('teste@teste.com.br');
$Cliente->setPassword(password_hash('123456', PASSWORD_DEFAULT));
$Cliente->setCnpj('04.240.577/0001-21');
$Cliente->setEndereco('R. General Bento Martins, 24');
$Cliente->setUf('RS');
$Cliente->setPais('Brasil');
$Cliente->setCep('90010-080');
$Cliente->setTelefone('51 991289103');



$entityManager->persist($Cliente);
$entityManager->flush();
echo $Cliente->getId().PHP_EOL;

$Cliente = new Cliente();
$Cliente->setNome('Teste de cliente 2');
$Cliente->setEmail('teste@dois.com.br');
$Cliente->setPassword(password_hash('654321', PASSWORD_DEFAULT));
$Cliente->setCnpj('12.345.678/0001-10');
$Cliente->setEndereco('R. Joaquim Nabuco, 320');
$Cliente->setUf('RS');
$Cliente->setPais('Brasil');
$Cliente->setCep('94810-590');
$Cliente->setTelefone('51 991131336');

$entityManager->persist($Cliente);
$entityManager->flush();
echo $Cliente->getId() . PHP_EOL;