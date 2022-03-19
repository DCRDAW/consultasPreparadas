
<?php

class Funciones{
    public function __construct()
    {
      include "configuracionBD.php";
      $this->mysqli = new mysqli(SERVIDOR,USUARIO,PASSWORD,DB);
  
      //preparamos la consulta alta
      $this->alta=$this->mysqli->prepare("INSERT INTO persona(nombre,apellido) VALUES (?,?)");

      //preparamos la consulta para sacar los datos
      $this->datos=$this->mysqli->prepare("SELECT nombre,apellido from persona");

    }
    function altaPersona($nombre,$apellido){
      //asignamos los atributos
      $this->alta->bind_param("ss",$nombre,$apellido);

      //ejecutamos la consulta
      if($this->alta->execute()){
        echo "todo correcto";
      }
    }
    function listado(){
      //ejecutamos la consulta
      if($this->datos->execute()){
        $resultado=$this->datos->get_result();
      }
      //sacamos los datos de la consulta
      $resultados=array();
      while ($fila = $resultado->fetch_array()){
        array_push($resultados,
          [
            "nombre" => $fila["nombre"],
            "apellido" => $fila["apellido"],
          ]
        );
      }
      return $resultados;

    }
}

