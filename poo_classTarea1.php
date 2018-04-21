<?php
//Autor: Walter Sanchez
//Fecha: 02 abril 2018
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
}

$miObjeto = new MiClase();
$miObjeto->setNombre('Walter');
echo $miObjeto->getNombre().'<br>';

$miObjeto2 = new MiClase();
$miObjeto2->setNombre('Claudio');
echo $miObjeto2->getNombre();

//Tarea
//Crear Funcion que modifique la propiedad $NombreObjeto
//Convertir la propiedad "$nombreObjeto" a privada
//Crear 5 diferentes objetos con diferente nombre y mostrar los nombres de cada uno