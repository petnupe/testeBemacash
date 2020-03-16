<?php

namespace Bemacash\Tests;
use Bemacash\Entity\Pedido;
use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * @test
 */

class PedidoTest extends TestCase
{
     public function testDataPedidoFutura() 
     {
          $Pedido = new Pedido();
          $dataPedido = new DateTime(date('10-02-2020'));
          self::assertTrue($Pedido->setData($dataPedido) instanceof Pedido);
     }
}