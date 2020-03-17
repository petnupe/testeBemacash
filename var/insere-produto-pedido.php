<?php
echo PHP_EOL.'Inicialzando PedidoProduto'.PHP_EOL;

use Bemacash\Entity\Pedido;
use Bemacash\Entity\Produto;
use Bemacash\Entity\Item;
use Bemacash\Helper\EntityManagerFactory;

require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();

$Pedidos = $entityManager->getRepository(Pedido::class)->findAll();
$Produtos = $entityManager->getRepository(Produto::class)->findAll();

foreach ($Pedidos as $Pedido) {
    echo "Inserindo no pedido {$Pedido->getId()}";
    
    foreach ($Produtos as $p) {

    echo " o produto {$p->getDescricao()}\n";
    
    $Produto = $entityManager->getRepository(Produto::class)->find(rand(1, 6));
    $ProdutoPedido = new Item();
    $ProdutoPedido->setPedido($Pedido);
    $ProdutoPedido->setProduto($Produto);
    $ProdutoPedido->setQuantidade(rand(1, 3));
    $entityManager->persist($ProdutoPedido);
    $entityManager->flush();
}
echo "\n\n";
}




