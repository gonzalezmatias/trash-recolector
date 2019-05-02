
<?php
require('libs/Smarty.class.php');

// Cuando el controller lo solicita, muestra el template requerido.
class FormView
{

  private $Smarty;


  function __construct()
  {
    $this->Smarty = new Smarty();


  }

  function showForm($title){ //La activación de la función pone en pantalla el template solicitado
    $this->Smarty->assign('title',$title);
    $this->Smarty->display('templates/form.tpl');
  }
  function successfulComplaint($title){
    $this->Smarty->assign('title',$title);
    $this->Smarty->display('templates/denunciaExitosa.tpl');
  }

}
