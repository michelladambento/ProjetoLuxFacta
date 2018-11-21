<?php

/*******************************************************************************
  A classe LuxFacta recebe um parâmetro no seu construtor que é sempre um número
   inteiro.
  Com base nesse numero n, escreva o corpo do método say, de forma que:
    - Se o número n for divisível por 3, o retorno deve ser "Lux"
    - Se o número n for divisível por 5, o retorno deve ser "Facta"
    - Se o número n for divisível por 3 e por 5, o retorno deve ser "LuxFacta"
    - Qualquer outra condição o retorno deve ser o próprio número n;
*******************************************************************************/

class LuxFacta {

  private $n;

  public function __construct($n) {
    $this->n = $n;
  }

  public function say() {

     if(($this->n % 3 == 0) and ($this->n % 5 == 0)){
          return "LuxFacta";
        }else if(($this->n % 3 == 0)){
           return "Lux"; 
        }else if(($this->n % 5 == 0)){
          return "Facta";
        }else{
          return $this->n;
        }
  }
  
}
