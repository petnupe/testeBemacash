<?php

namespace Bemacash\Tests;
use Bemacash\Entity\Cliente;
use Bemacash\Helper\EntityManagerFactory;
use PHPUnit\Framework\TestCase;

/**
 * @test
 */

class ClienteTest extends TestCase {

     public function testSetClienteRetornaGet()
     {
          $Cliente = new Cliente();
          $Cliente->setPassword('123456');
          $result = $Cliente->setPassword('123456') instanceof Cliente;
          self::assertTrue($result);
     }
    
     public function testTamanhoCnpjCliente()
     {
          $Cliente = new Cliente();
          $Cliente->setCnpj('04.240.577/0001-21');
          self::assertEquals(strlen($Cliente->getCnpj()), 18);
     }
}