<?php
//Autor: Walter Sanchez
//Fecha: 02 abril 2018
class html{
  public function cabeza($tituloPagina="Sin Titulo",$javascript=null){
    $inicio = '<!DOCTYPE html> <html lang="es"> <head> <meta charset="UTF-8"> <title>'.$tituloPagina.'</title>';
    $cierreHead = '</head>';
    
    // compruebo que la propiedad script no sea nula es decir que se haya seteado.
    // si tiene algo inserta el tag HTML <script></script> con su javasdcript en su interior
    // si no tiene nada no se imprime el tag HTML <script></script>
    
    
    if(!is_null($javascript)){
      // Crea el Tag '<script> con el codigo de javascript seteado
      $scriptJSapertura = '<script>';
      $scriptJSCierre = '</script>';
      echo $inicio.$scriptJSapertura.$javascript.$scriptJSCierre.$cierreHead; 
    }else{
      // si no tiene javascript no s insertar el Tag '<script> 
      echo $inicio.$cierreHead;
    } 
  }
  
    public function abrirCuerpo(){
       echo "<body>";
  }
  
    public function cerrarCuerpo(){
      echo "</body>";
  }
    public function pie(){
      echo "</html>";
  }
  
}// Fin de la Class: html

class MiClase
{
  private $nombreObjeto = '';
  public function __construct()
    {
        echo "se creo el objeto<br>";    
    }
  public function setNombre($nombre){
    $this->nombreObjeto= $nombre;
  }
    public function getNombre(){
     return $this->nombreObjeto;
  }
}// Fin de la Class: MiClase


//html
$objetohtml = new html();
// insertar codigo javascript
//$objetohtml->cabeza('POO PHP'); // sin javascript 
$objetohtml->cabeza('POO PHP',"alert('Esto es un alerta de Javascript.')"); // con javascript
$objetohtml->abrirCuerpo();

// imprimir nombres
$miObjeto = new MiClase();
$miObjeto->setNombre('Walter');
echo $miObjeto->getNombre().'<br>';

$miObjeto2 = new MiClase();
$miObjeto2->setNombre('Claudio');
echo $miObjeto2->getNombre();

// html 
$objetohtml->cerrarCuerpo();
$objetohtml->pie();

//Tarea
//Crear Funcion que modifique la propiedad $NombreObjeto
//Convertir la propiedad "$nombreObjeto" a privada
//Crear 5 diferentes objetos con diferente nombre y mostrar los nombres de cada uno
