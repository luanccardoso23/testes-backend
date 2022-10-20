<?php
namespace App;

class Slug{
    private $texto;
    public function __construct($texto){
        $this->texto = $texto;
    }

    public function converter(){
        $resultado = str_replace(" ", "-",$this->getTexto());// o str_replace irá substituir determinado valor que está sendo procurado, por outro, em determinada string.
        return strtolower ($resultado);

    }

    public function getTexto(){
        return trim($this->texto);// A função trim remove todos os espaços do lado direito e esquerdo do texto.
    }
}

