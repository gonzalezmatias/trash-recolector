<?php
class FormMode{

private $db;

  function __construct(){
    //introducir nombre bbdd
    $this->db = new PDO('mysql:host=localhost;dbname==utf8', 'root', '');
  }

  function createAcomplaint($lugarReporte,$detalle,$fecha,$idUsuario){
    $insert= $this->$db->prepare("INSERT INTO Reportes(lugar_reporte,detalle,fecha,id_usuario)"."VALUES(:lugar_reporte, :detalle, :fecha, :id_usuario)");
    $insert->execute(array(":lugar_reporte"=>$lugarReporte, ":detalle"=>$detalle, ":fecha"=>$fecha, ":id_usuario"=>$idUsuario));

  }

}

 ?>
