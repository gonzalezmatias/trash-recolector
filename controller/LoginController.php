<?php
require_once "./view/LoginView.php";
require_once "./model/LoginModel.php";
require_once "./view/formView.php";
class LoginController
{
  private $view;
  private $model;
  private $title;
  private $formView;
  function __construct()
  {
    $this->formView = new formView();
    $this->view = new LoginView();
    $this->model = new LoginModel();
    $this->title ="Control de basura";
  }
  function login(){
    $this->view->showLogin($this->title);
  }
  function logout(){
    session_start();
    session_destroy();
    header(VISITOR);
  }
  function createAccount(){
    $this->view->showRegistrationForm($this->title);
  }
  function verifyRegister(){
    if(!empty($_POST['userId']) && !empty($_POST['passwordId'])){
      $user = $_POST['userId'];
      $pass = password_hash($_POST["passwordId"], PASSWORD_DEFAULT);
      $dbUser = $this->model->getUser($user);
      if (!$dbUser) {
        $this->model->insertUser($user, $pass);
        $this->verifyLogin();
      }
      else{
        $this->view->showRegistrationForm($this->title,"Usuario Existente");
      }
    }
    else {
      $this->view->showRegistrationForm($this->title,"Complete todos los campos");
    }
  }

  function verifyLogin(){
    if (!empty($_POST['userId']) && !empty($_POST['passwordId'])){
      $user = $_POST["userId"];
      $pass = $_POST["passwordId"];
      //var_dump($pass);
      $dbUser = $this->model->getUser($user);
      if (password_verify($pass, $dbUser["pass"])) {
        //var_dump("entró");
        session_start();
        $_SESSION["user"]=$user;
        header(HOME);
      }else{
        $this->view->showLogin($this->title, "Usuario y/o Contraseña incorrecta");
      }
    } else {
      //var_dump("else2");
      $this->view->showLogin($this->title, "No existe el usuario");
    }
  }

  function isLogged(){
    session_start();
    if (isset($_SESSION["user"])){
      $isAdmin = $this->model->getUser($_SESSION["user"]);
      if($isAdmin["admin"] == 1){
        return "admin";
      }
      return "user";
    }else{
      return "visitor";
    }
  }

  function getUserID(){
    if(!isset($_SESSION))
  {
      session_start();
  }
    //session_start();
  if (isset($_SESSION["user"])){
    $user = $_SESSION["user"];
    $id = $this->model->getUser($user);
    return $id["id_usuario"];
  }
  }

  function getUser(){
    if (isset($_SESSION["user"])){
      return $user = $_SESSION["user"];
    }
  }
}
?>
