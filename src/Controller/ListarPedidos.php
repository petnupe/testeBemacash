<?php

namespace Bemacash\Controller;

use Bemacash\Controller\InterfaceControladorRequisicao;
use Bemacash\Entity\Historico;
use Bemacash\Entity\Pedido;
use Bemacash\Helper\EntityManagerFactory;

class ListarPedidos implements InterfaceControladorRequisicao
{
	private $repositorioPedidos;

	public function __construct()
	{
		$entityManager = (new EntityManagerFactory())->getEntityManager();
		$this->repositorioPedidos = $entityManager->getRepository(Pedido::class);
		$this->repoHistoricos = $entityManager->getRepository(Historico::class);
	}

	public function processaRequisicao() : void
	{
		if(@$_GET['id']) {
			$pedidosList = $this->repositorioPedidos->findBy(['cliente' => $_GET['id']]);

			if($pedidosList) {
				$titulo = "Pedidos de: " . $pedidosList[0]->getCliente()->getNome();
				require __DIR__ . '/../../view/pedidos/ListarPedidos.php';
				exit();
			}
		}
		$titulo = 'Erro';
		$erro   = 'Ops! Alguma coisa saiu errado!' ;
		require __DIR__ . '/../../view/erro.php';
	}
}