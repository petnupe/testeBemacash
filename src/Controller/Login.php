<?php

namespace Bemacash\Controller;

use Bemacash\Controller\InterfaceControladorRequisicao;
use Bemacash\Entity\Cliente;
use Bemacash\Helper\EntityManagerFactory;

class Login implements InterfaceControladorRequisicao{

    private $repositorioDeClientes;

    public function __construct()
    {
        $entityManager = (new EntityManagerFactory())->getEntityManager();
        $this->repositorioDeClientes = $entityManager->getRepository(Cliente::class);
    }

    public function processaRequisicao(): void
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $Cliente = $this->repositorioDeClientes->findOneBy(['email' => $email]);

        $erro = null;

        if($Cliente) {
            if($Cliente->verificaSenha($_POST['senha'])) {
                header('Location: ./ListarPedidos?id='.$Cliente->getId());
            }
        }

        $titulo = 'Erro';
        $erro   = 'E-mail ou senha incorretos!' ;
        require __DIR__ . '/../../view/erro.php';
        
    }
}