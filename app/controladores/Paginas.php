<?php

/**
 *
 */
class Paginas extends Controlador {

  public function __construct()
  {
    //echo 'Controlador paginas cargado';
  }

  public function index(){
    $datos = [
      'titulo' => 'Bienvenido a MVC render2web'
    ];
    $this->vista('paginas/inicio',$datos);
  }

  public function articulo(){
    //$this->vista('paginas/articulo');
  }

  public function actualizar($num_registro){
    echo $num_registro;
  }
}

 ?>
