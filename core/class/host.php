<?php

//clase de obtencion de nombre del host
 class host{
   public $nombre;

     public function __construct(){}

     public function nombre(){
      	$this -> nombre ="localhost";
        return $this -> nombre ;
      }
   }
?>