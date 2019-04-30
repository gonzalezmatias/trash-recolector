
<?php
require('libs/Smarty.class.php');

/**
 *
 */
class CategoriasView
{

  private $Smarty;


  function __construct()
  {
    $this->Smarty = new Smarty();


  }

  function Mostrar($Titulo){
    
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->display('templates/form.tpl');
  }


