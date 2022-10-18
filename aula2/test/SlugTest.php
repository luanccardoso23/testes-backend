<?php

use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase{
    public function test_converter(){
        require_once ("app/Slug.php");

        $meuSlug = new Slug("Noticias do estado do maranhao");
        $resultadoEsperado = "noticias-do-estado-do-maranhao";

        $this->assertEquals($meuSlug->converter(), $resultadoEsperado);// o método assertEquals() significa literalmente afirmar que seja igual, com isso estamos comparando o valor do método com o valor esperado.
    }
}