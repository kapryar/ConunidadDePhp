<?php
//Autor: Walter Sanchez
//Fecha: 02 abril 2018
class html{
  private $script=null;//se setea a null el script de javascript
  private $titulo= "Sin titulo"; // titulo del doc web
  public function cabeza(){
    $inicio = '<!DOCTYPE html> <html lang="es"> <head> <meta charset="UTF-8"> <title>'.$this->titulo.'</title>';
    $cierreHead = '</head>';
    
    // compruebo que la propiedad script no sea nula es decir que se haya seteado.
    // si tiene algo inserta el tag HTML <script></script> con su javasdcript en su interior
    // si no tiene nada no se imprime el tag HTML <script></script>
    if(!is_null( $this->script)){
        $scriptJS = $this->getJavaScript();
        echo $inicio.$scriptJS.$cierreHead;    
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
    public function setTitulo($tituloObj){
    // a la propiedad script se lo setea con el valor obtenido
     $this->titulo=$tituloObj;
  } 
    public function setJavaScript($scriptObj){
      // a la propiedad script selo setea con el valor obtenido
       $this->script=$scriptObj;
  }
  
    private function getJavaScript(){
      // Crea el Tag '<script> con el codigo de javascript seteado
      $scriptJSapertura = '<script>';
      $scriptJSCierre = '</script>';
      $scriptJS = $scriptJSapertura.$this->script.$scriptJSCierre;
      return $scriptJS;
  }
  
}// Fin de la Class: html

class MiClase
{
  private $nombreObjeto = '';
  public function __construct()
    {
        echo "Se creo el objeto <br>";    
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
$objetohtml->setJavaScript("alert('Esto es un alerta de Javascript.')");
//$objetohtml->setJavaScript("alert('Esto es otra alerta de Javascript.')");
$objetohtml->setTitulo('PHP POO');
$objetohtml->cabeza();
$objetohtml->abrirCuerpo();

// imprimir nombres
$miObjeto = new MiClase();
$miObjeto->setNombre('Walter');
echo $miObjeto->getNombre().'<br>';

$miObjeto2 = new MiClase();
$miObjeto2->setNombre('Claudio');
echo $miObjeto2->getNombre().'<br>';

$miObjeto3 = new MiClase();
$miObjeto3->setNombre('Micaela');
echo $miObjeto3->getNombre().'<br>';

// html 
$objetohtml->cerrarCuerpo();
$objetohtml->pie();

//Tarea
//Crear Funcion que modifique la propiedad $NombreObjeto
//Convertir la propiedad "$nombreObjeto" a privada
//Crear 5 diferentes objetos con diferente nombre y mostrar los nombres de cada uno
//Insertarcodigo javascript
?>