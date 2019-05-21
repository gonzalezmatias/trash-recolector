<?php

class AdminModel{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=trash_recolector; charset=utf8', 'root', '');
  }

  function fetchMap($image){
    $sentencia = $this->db->prepare("SELECT reportes.map FROM reportes");
    $sentencia->execute(array());
    $dbMap = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $image;

  }

  function fetchAllReports(){
    $sentencia = $this->db->prepare("SELECT * FROM reportes");
    $sentencia->execute(array());
    $reports = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $reports;
  }

}

 ?>
