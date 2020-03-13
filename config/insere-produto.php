<?php
echo PHP_EOL.'Inicialzando produtos'.PHP_EOL;
use Bemacash\Entity\Produto;
use Bemacash\Helper\EntityManagerFactory;

require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();

$produtos = [
    "Licenciamento Bemacash Vestuario",
    "TABLET SAMSUMG GALAXY TAB E 9.6 SM-T560 199100070",
    "SUPORTE METALICO TABLET BEMACASH 9.6 pol 499 100720",
    "GAVETA DINHEIRO GD-66 PRETA 128000 100",
    "Licença de Software Fiscal Manager",
    "MP-4200 TH ETHERNET BR 10 10000830"
];

$icones = [
        '<i class="fas fa-file-signature"></i>',
        '<i class="fas fa-tablet-alt"></i>',
        '<i class="fas fa-vote-yea"></i>',
        '<i class="fas fa-inbox"></i>',
        '<i class="fas fa-file-signature"></i>',
        '<i class="fas fa-print"></i>'
];

$i = 0;
foreach($produtos as $produto) {
    //echo $produto.PHP_EOL;
    $Produto = new Produto();
    $Produto->setDescricao($produto);
    $Produto->setIcone($icones[$i++]);
    $valor = number_format((rand(10, 100) / 3), 2, '.','');

    echo ' -> ' .$valor.' - ';
    $Produto->setValor($valor);

    $entityManager->persist($Produto);
    $entityManager->flush();
    echo $Produto->getId().PHP_EOL;
}