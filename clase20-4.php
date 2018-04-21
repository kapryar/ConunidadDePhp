<?php
//Autor: Walter
//Fecha: 20 abril 2018
//Video del Webinar:
class OperacionesAritmeticas
  {
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
       $resultado='';
       switch($operacion)
       {
         case "suma":
           $resultado = $datosR[0] + $datosR[1] + $datosR[2]+ $datosR[3]+$datosR[4];
           break;
         case "resta":
           $resultado = $datosR[0] - $datosR[1] - $datosR[2] - $datosR[3];
           break;
         case "multiplica":
            $resultado = $datosR[0] * $datosR[1] * $datosR[2] * $datosR[3];
            break;
         case "divide":
           $resultado = $datosR[0] / $datosR[1] / $datosR[2] / $datosR[3];
           break;
          default:
          $resultado = 'La operacion '.$operacion.' no reconocida';
          break;
       }
        return $resultado;
      }    
  }
$datos = array(1,2,3,4,5,6,7);
$objeto = new  OperacionesAritmeticas();
//$objeto->arreglo();
echo "valor es: ".$objeto->operaciones($datos,"raiz");  


