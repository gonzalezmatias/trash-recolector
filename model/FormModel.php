<?php
class FormModel{

private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=trash_recolector; charset=utf8', 'root', '');
  }

  //alta de denuncia
  function createAComplaint($detalle,$latitud,$longitud,$imagen,$id_usuario){

    $path="images/".uniqid()."_".$imagen["name"];
    move_uploaded_file($imagen["tmp_name"], $path);

    $insert= $this->$db->prepare("INSERT INTO Reportes(detalle,latitud,longitud,imagen,id_usuario)
    "."VALUES(:detalle, :latitud, :longitud, :imagen, :id_usuario)");
    $insert->execute(array(":detalle"=>$detalle, ":latitud"=>$latitud, ":longitud"=>$longitud,
    ":imagen"=>$path, :id_usuario"=>$idUsuario));

    }


}

 ?>
