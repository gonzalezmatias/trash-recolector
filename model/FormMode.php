<?php
class FormMode{

private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=Trash_Recolector;charset=utf8', 'root', '');
  }

  //alta de denuncia
  function createAcomplaint($lugarReporte,$detalle,$fecha,$idUsuario){
    $insert= $this->$db->prepare("INSERT INTO Reportes(lugar_reporte,detalle,fecha,id_usuario)"."VALUES(:lugar_reporte, :detalle, :fecha, :id_usuario)");
    $insert->execute(array(":lugar_reporte"=>$lugarReporte, ":detalle"=>$detalle, ":fecha"=>$fecha, ":id_usuario"=>$idUsuario));

  }

}

 ?>
