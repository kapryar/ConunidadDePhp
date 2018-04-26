<?php

class OperacionesAritmeticas
  {
     public function __construct($valor)
    {
        echo "Metodo magico constructor $valor  <br>";
    }

    public function __destruct(){
        echo "<br>Adios Objeto.<br>";
    }

    public function __call($nombreMetodo, $argumento)
    {
        echo "Estas llamando el metodo $nombreMetodo <br>";
        echo "Los argumentos son ".$argumento[0]."<br>";
        if ($nombreMetodo=="suma"){
            $resultado = 1+1;
            echo "El resultado es $resultado <br>";
        }elseif ($nombreMetodo=="resta"){
            $resultado = 1-1;
            echo "El resultado es $resultado <br>"; 
        }
    }

    public function __get($nombrePropiedad){
        echo "Estas intentao extraer la propiedad $nombrePropiedad de manera directa. Debes utiliza el metodo obtenerEdad<br>";
    }

    public function __set($nombrePropiedad, $valor){
        echo "Asignaste a la propiedad $nombrePropiedad el valor $valor<br>";
    }

     public function operaciones($datosR, $operacion="divide")
      {
        
      }    
  }
$objeto = new  OperacionesAritmeticas("1");
//$objeto2 = new  OperacionesAritmeticas("2");
//$objeto2 = null;
//echo "Mucho codigo antes<br>";
//$objeto->resta();

//$objeto->suma(1,2,3,4,5);
$objeto->edad=4;
echo "La edad es ".$objeto->edad;