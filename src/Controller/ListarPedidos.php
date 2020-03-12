<?php

namespace Bemacash\Controller;

use Bemacash\Controller\InterfaceControladorRequisicao;
use Bemacash\Entity\Pedido;
use Bemacash\Helper\EntityManagerFactory;

class ListarPedidos implements InterfaceControladorRequisicao
{
    private $repositorioPedidos;

    public function __construct() {
        $entityManager = (new EntityManagerFactory())->getEntityManager();
        $this->repositorioPedidos = $entityManager->getRepository(Pedido::class);
    }

    public function processaRequisicao() : void
    {
        $pedidosList = $this->repositorioPedidos->findBy(['cliente' => $_GET['id']]);
        $titulo = "Pedidos de: " . $pedidosList[0]->getCliente()->getNome();
        require __DIR__ . '/../../view/pedidos/ListarPedidos.php';
        exit();
    }
}
