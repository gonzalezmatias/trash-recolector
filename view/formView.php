
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

  function mostrar($titulo){
    $this->Smarty->assign('titulo',$titulo);
    $this->Smarty->display('templates/form.tpl');
  }

}
