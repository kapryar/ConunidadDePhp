<?php

class OperacionesAritmeticas
  {
     public function __construct($valor)
    {
        echo "Metodo magico constructor $valor <br>";
    }

    public function __destruct(){
        echo "Adios Objeto.<br>";
    }

     public function operaciones($datosR, $operacion="divide")
      {
        
      }    
  }
$objeto = new  OperacionesAritmeticas("1");
$objeto2 = new  OperacionesAritmeticas("2");
$objeto2 = null;
 echo "Mucho codigo antes<br>";
