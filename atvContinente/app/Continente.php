<?php

namespace App;

class Continente{
    private $nome;
    private $idioma;
    private $localizacao;

    public function __construct($nome="", $idoma="", $localizacao=""){
        $this->nome = $nome;
        $this->idoma = $idioma;
        $this->localizacao = $localizacao;
    }

    public function adicionaPaises($nome, $idioma, $localizacao){
        
    }
}