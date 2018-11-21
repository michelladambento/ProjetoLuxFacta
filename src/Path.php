<?php

/*******************************************************************************
  Escreva o método cd (change directory) para um sistema de arquivos abstrato.
    O diretório raiz é '/'
    O separador é '/'
    O diretório pai é acessível através de '..'
    O nome de um diretório contém apenas letras (A-Za-z)
    Quando um path for inválido, o método deverá lançar a exceção do tipo InvalidPathException

  Por exemplo:
    $path = new Path('/a/b/c/d');  
    echo $path->cd('e/f')->currentPath;   //exibe '/a/b/c/d/e/f
    echo $path->cd('../x')->currentPath;  //exibe '/a/b/c/d/e/x'
    echo $path->cd('/d')->currentPath;    //exibe '/d'
    echo $path->cd('/?')->currentPath;    //InvalidPathException é lançada

*******************************************************************************/
class InvalidPathException extends Exception
{
}

class Path {

  public $currentPath;

  public function __construct($path) {
    $this->currentPath = $path;
  }


  public function cd($path) {
    return $this;
  }
}

/*$abredir = "A/B/C";
echo $diretorio = strrpos(substr($abredir, 0, -1), '/');



$vetor=[];
foreach(range('A', 'Z') as $key=>$letra) {
   $vetor[$key] = $letra; 
}
*/



