<?php

//Clase del Controlador Principal

class Controlador {
  //Cargar Modelo
  public function modelo($modelo){
    //Carga
    require_once '../app/modelos/'.$modelo. '.php';
    //Instanciar el modelo
    return new $modelo();
  }

  //Cargar Vista
  public function vista($vista, $datos = []){
    //Carga
    if (file_exists('../app/vistas/'.$vista. '.php')) {
      require_once '../app/vistas/'.$vista.'.php';
    } else {
      die('La Vista No Existe');
    }
  }

}
