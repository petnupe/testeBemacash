<?php

namespace Bemacash\Services;
use Bemacash\Controller\InterfaceControladorRequisicao;
use Bemacash\Entity\Pedido;
use Bemacash\Helper\EntityManagerFactory;

class DetalhePedido implements InterfaceControladorRequisicao{

    public function __construct()
	{
        $entityManager = (new EntityManagerFactory())->getEntityManager();
        $this->repositorioPedidos = $entityManager->getRepository(Pedido::class);
    }

    public function processaRequisicao() : void
    {
        $pedido = $this->repositorioPedidos->find($_REQUEST['idPedido']);
        require __DIR__ . '/../../view/pedidos/DetalhePedido.php';
    }
}