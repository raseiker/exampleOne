<?php
namespace Producto;

class Producto{
  private $code;
  private $name;

  function __construct($c, $n){
    $this->code = $c;
    $this->name = $n;
  }

  function get_code(){
    return $this->code . '<br>';
  }

  function get_name(){
    return $this->name . '<br>';
  }

}
//otro comentario para generar conflicto
//comentando desde un nuevo commit que es parte de la rama 457f41c
//igual que la fila twenty two
