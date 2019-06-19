
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
  function showUserPage($title, $user, $userComplaints){
    $this->Smarty->assign('title', $title);
    $this->Smarty->assign('user', $user);
    $this->Smarty->assign('reports', $userComplaints);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/form.tpl');
  }
  function showAdminPage($title, $user, $reports){
    $this->Smarty->assign('title', $title);
    $this->Smarty->assign('user', $user);
    $this->Smarty->assign('reports',$reports);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/recorrido.tpl');
  }
  function showVisitorPage($title){
    $user="";
    $msj="";
    $this->Smarty->assign('user', $user);
    $this->Smarty->assign('mensaje', $msj);
    $this->Smarty->assign('title', $title);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/visitorHome.tpl');
  }

  function showForm($title){ //La activación de la función pone en pantalla el template solicitado
    $this->Smarty->assign('title',$title);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/form.tpl');
  }
  function successfulComplaint($title,$user){
    $this->Smarty->assign('user', $user);
    $this->Smarty->assign('title',$title);
    $this->Smarty->display('templates/successfulComplaint.tpl');
  }

}
