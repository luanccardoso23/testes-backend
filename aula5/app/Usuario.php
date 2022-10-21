<?php

namespace App;

class Usuario{
    private $nome;

    public function VerificaNome($valor){
        $this->nome = strlen($valor);// conta a quantidade de letras de uma palavra

        if($this->nome >=10){
            return $this->nome;

        }
        else{
            return false;

        }
       
    }


   }
   
   
   

