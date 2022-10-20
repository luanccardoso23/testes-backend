<?php

use PHPUnit\Framework\TestCase;
use App\Cliente;

class ClientTest extends TestCase{
    
    public function testVerificarCamposVazio(){
        $meuCliente = new Cliente("Zildo","zildocastro@gmail.com",22092606);

        $this->assertTrue($meuCliente->validaCampos());
    }

    public function testContarItensPreferencia(){
        $meuCliente = new Cliente("Laele","laele@laele.com",456);
        $meuCliente->setPreferencias(["Promoção", "Roupa Barata", "Comida Baiana"]);

        $this->assertCount(3,$meuCliente->getPreferencias());
    }

    public function testVerificarTotalCompras(){
        $meuCliente = new Cliente("Junior","junior@email.com",1313);
        $meuCliente->setTotalCompras(450);

        $this->assertGreaterThan(200, $meuCliente->getTotalCompras());
    }
}