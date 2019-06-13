<?php
class LoginView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }

  function showLogin($titulo, $mensaje=""){
    $user="";
    $this->Smarty->assign('user', $user);
    $this->Smarty->assign('title', $titulo);
    $this->Smarty->assign('mensaje', $mensaje);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/visitorHome.tpl');
  }
  function showRegistrationForm($titulo, $mensaje=""){
    $user="";
    $this->Smarty->assign('user', $user);
    $this->Smarty->assign('title', $titulo);
    $this->Smarty->assign('mensaje', $mensaje);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/registrationForm.tpl');
  }
}
?>
