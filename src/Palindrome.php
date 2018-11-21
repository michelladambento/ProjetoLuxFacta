<?php

/*******************************************************************************
  Uma palíndroma é uma palavra que se lê da mesma forma de trás para frente.

  Escreva o corpo do método isPalindrome que verifica se uma palavra é
  palíndroma. A validação deve desconsiderar diferença entre maiúsculas e
  minúsculas (case insensitive).

  Por exemplo, isPalindrome(“Deleveled”) deve retornar true.
*******************************************************************************/


class Palindrome {

  public static function isPalindrome($word) {

    $palavraTamanho = strlen($word) - 1;
    	$auxiliar = '';

    	for($x = $palavraTamanho; $x>=0; $x--){
    		$auxiliar .= $word[$x];		
    	}
    	
    	return (strtoupper($auxiliar) ==strtoupper($word))? "True": "False";
  }

}

//echo Palindrome::isPalindrome("bento");
