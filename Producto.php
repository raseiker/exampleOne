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

//creating an update for twice