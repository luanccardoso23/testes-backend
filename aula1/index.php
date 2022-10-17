<?php

class Slug{
    private $texto;
    public function __construct($texto){
        $this->texto = $texto;
    }

    public function converter(){
        $resultado = str_replace(" ", "-",$this->texto);// o str_replace irá substituir determinado valor que está sendo procurado, por outro, em determinada string.
        return strtolower ($resultado);

    }
}

$meuSlug = new Slug("Teste de backend usando php");
echo $meuSlug->converter();