<?php
//Autor: Walter
//Fecha: 20 abril 2018
//Video del Webinar:
class OperacionesAritmeticas
  {
     public function operaciones($datosR, $operacion="suma")
      {
       $resultado='';
       $numElementos = count($datosR);
       echo "Hay $numElementos de elementos.  <BR>";

       switch($operacion)
       {
         case "suma":
           //$resultado = $datosR[0] + $datosR[1] + $datosR[2]+ $datosR[3]+$datosR[4];
           for ($i = 0; $i <$numElementos; $i++ ){
              $resultado+=  $datosR[$i];
           }
           break;
         case "resta":
           //$resultado = $datosR[0] - $datosR[1] - $datosR[2] - $datosR[3];
           for ($i = 0; $i <$numElementos; $i++ ){
            $resultado-=  $datosR[$i];
         }
           break;
         case "multiplica":
            //$resultado = $datosR[0] * $datosR[1] * $datosR[2] * $datosR[3];
            $resultado = $datosR[0];
            for ($i = 0; $i <$numElementos; $i++ ){
             $resultado = $resultado * $datosR[$i];
          }
            break;
         case "divide":
          // $resultado = $datosR[0] / $datosR[1] / $datosR[2] / $datosR[3];
          $resultado = $datosR[0];
          for ($i = 0; $i <$numElementos; $i++){
            if($datosR[$i]<>0){
              $resultado = $resultado / $datosR[$i];
            }else{
              $resultado = ' La operacion divide no se permite dividir por 0';
              break;
            }
          }
           break;
          default:
            $resultado = 'La operacion '.$operacion.' no reconocida';
          break;
       }
        return $resultado;
      }    
  }
//$datos = array(1,2,3,4,5,6,7);
$datos = array(1,2,0,4,5);
$objeto = new  OperacionesAritmeticas();
//$objeto->arreglo();
echo "El resultado es: ".$objeto->operaciones($datos,"divide");  


