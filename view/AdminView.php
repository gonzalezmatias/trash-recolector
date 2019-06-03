
<?php

// Cuando el controller lo solicita, muestra el template requerido.
class AdminView
{

  private $Smarty;


  function __construct()
  {
    $this->Smarty = new Smarty();

  }

  function showMap($title,$reports,$user){ //La activación de la función pone en pantalla el template solicitado
    $this->Smarty->assign('title',$title);
    $this->Smarty->assign('reports',$reports);
    $this->Smarty->assign('user',$user);
    $this->Smarty->display('templates/recorrido.tpl');
  }

  function showReports($title,$reports){
    $this->Smarty->assign('title',$title);
    $this->Smarty->assign('reports',$reports);
    $this->Smarty->display('templates/reportsList.tpl');
  }

}
