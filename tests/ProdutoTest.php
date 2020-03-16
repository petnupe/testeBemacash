<?php

namespace Bemacash\Tests;

use Bemacash\Entity\Produto;
use PHPUnit\Framework\TestCase;

/**
 * @test
 */

class testProduto extends TestCase 
{
     public function testValorMaiorQueZero()
     {
          $Produto = new Produto();
          $result = $Produto->setValor(0.01);
          self::assertTrue($result instanceof Produto);
     }

}