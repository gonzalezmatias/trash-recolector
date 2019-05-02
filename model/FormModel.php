<?php
class FormModel{

private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=trash_recolector; charset=utf8', 'root', '');
  }

  //alta de denuncia
  function createAComplaint($detalle,$latitud,$longitud,$imagen,$id_usuario){

    $path=$this->subirImagen($imagen[0]);

    $insert= $this->db->prepare("INSERT INTO Reportes(detalle,latitud,longitud,imagen,id_usuario)
    "."VALUES(:detalle, :latitud, :longitud, :imagen, :id_usuario)");

    $insert->execute(array(":detalle"=>$detalle, ":latitud"=>$latitud, ":longitud"=>$longitud,
    ":imagen"=>$path, ":id_usuario"=>$id_usuario));

    }

    private function subirImagen($imagen){
        $destino_final = 'images/' . uniqid() . '.jpg';
        //echo "destino_final: ".$destino_final;
        move_uploaded_file($imagen, $destino_final);
        return $destino_final;
    }




}

 ?>
