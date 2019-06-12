
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
  function showUserPage($title, $user){
    $this->Smarty->assign('titulo', $title);
    $this->Smarty->assign('user', $user);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/userHome.tpl');
  }
  function showAdminPage($title, $user){
    $this->Smarty->assign('title', $title);
    $this->Smarty->assign('user', $user);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/adminHome.tpl');
  }
  function showVisitorPage($title){
    $this->Smarty->assign('title', $title);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/visitorHome.tpl');
  }

  function showForm($title){ //La activación de la función pone en pantalla el template solicitado
    $this->Smarty->assign('title',$title);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/form.tpl');
  }
  function successfulComplaint($title){
    $this->Smarty->assign('title',$title);
    $this->Smarty->display('templates/successfulComplaint.tpl');
  }

}
