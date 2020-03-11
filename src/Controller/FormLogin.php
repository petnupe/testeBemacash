<?php

namespace Bemacash\Controller;

use Bemacash\Controller\InterfaceControladorRequisicao;

class FormLogin implements InterfaceControladorRequisicao{

    public function processaRequisicao(): void
    {
       $titulo = 'Login';
        require __DIR__ . '/../../view/login/FormLogin.php';
    }


}