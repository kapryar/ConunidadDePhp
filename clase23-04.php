<?php
//Autor: Claudio Morales
//Fecha: 20 abril 2018
//Video del Webinar:
class OperacionesAritmeticas
  {
    public function demo()
    {
        $inicio = 1;
        while($inicio<5){
            echo "Ciclo $inicio <br>";
            $inicio++;
        }
    }

    public function demo2()
    {
        $inicio = 1;
        do {
            echo "Ciclo $inicio <br>";
            $inicio++;
        }while($inicio<1);        
    }
     public function estructura()
     {
       $valoruno = "Bol";
       $valordos = "Arg";
       $edad = 18;
       $resultado = ($edad>=18) ? "SI entra" : "No entra";
       return $resultado;
     }
     public function operaciones($datosR, $operacion="divide")
      {
       $numElemtos = count($datosR);
       //echo " Can elementos: $numElemtos";
       $resultado=0;
       switch($operacion)
       {
         case "suma":
           //$resultado = $datosR[0] + $datosR[1] + $datosR[2]+ $datosR[3]+$datosR[4];
           
           foreach($datosR as $variableInice=>$variableValor)
            {
             echo "valor Indice = $variableInice Valor Resultado $resultado Valor del arreglo ".$variableValor." <br>";
             $resultado += $variableValor;
            }


           break;
         case "resta":
           //$resultado = $datosR[0] - $datosR[1] - $datosR[2] - $datosR[3];
            for($a=0; $a < $numElemtos; $a++)
            {
             $resultado -= $datosR[$a];
            }
           break;
         case "multiplica":
            //$resultado = $datosR[0] * $datosR[1] * $datosR[2] * $datosR[3];
            $resultado = $datosR[0];
            for($a=0; $a < $numElemtos; $a++)
            {
              $resultado = $resultado * $datosR[$a];
            }
            break;
         case "divide":
           $resultado = $datosR[0] / $datosR[1] / $datosR[2] / $datosR[3];
           break;
       }
        return $resultado;
      }    
  }
//$datos = array(1,2,3,4,5);
$datos = array("uno"=>1,"dos"=>2,"tres"=>3,"cuatro"=>4,"cinco"=>5);
$objeto = new  OperacionesAritmeticas();
//$objeto->arreglo();
//echo "Foreach: Valor es: ".$objeto->operaciones($datos,"suma");  
//$objeto->demo();
$objeto->demo2();