<?php
class FormModel{

private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=trash_recolector; charset=utf8', 'root', '');
  }

  //alta de denuncia
  function createAComplaint($details,$latitude,$longitude,$image,$id_user){

    $path=$this->uploadImage($image[0]);

    $insert= $this->db->prepare("INSERT INTO Reportes(detalle,latitud,longitud,imagen,id_usuario)
    "."VALUES(:details, :latitude, :longitude, :image, :id_user)");

    $insert->execute(array(":details"=>$details, ":latitude"=>$latitude, ":longitude"=>$longitude,
    ":image"=>$path, ":id_user"=>$id_user));
    }

    private function uploadImage($image){
        $final_position = 'images/' . uniqid() . '.jpg';
        move_uploaded_file($image, $final_position);
        return $final_position;
    }




}

 ?>
