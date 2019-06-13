<?php
class FormModel{

  private $db;

  function __construct(){
    $this->db = $this->connect();
  }
  function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=trash_recolector;charset=utf8', 'root', '');
  }

  //alta de denuncia
  function createAComplaint($details,$latitude,$longitude,$image,$id_user){
    $path=$this->uploadImage($image[0]);
    $insert= $this->db->prepare("insert into reportes(detalle,latitud,longitud,imagen,id_usuario) values(?,?,?,?,?)");
    $insert->execute(array($details,$latitude,$longitude,$path,$id_user));
  }

  private function uploadImage($image){
    $final_position = 'images/' . uniqid() . '.jpg';
    move_uploaded_file($image, $final_position);
    return $final_position;
  }

   function getUserComplaint($user_id){
    $sentencia = $this->db->prepare("select * from reportes where id_usuario=?");
    $sentencia->execute(array($user_id));
    $reports = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $reports;
  }



}

?>
