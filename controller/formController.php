<?php
require_once  "./view/FormView.php";
require_once  "./model/FormModel.php";
require_once  "./model/AdminModel.php";
require_once "LoginController.php";
//El route llama al controller y este se encarga de derivar la tarea solicitada al model o a la vista según corresponda
class FormController
{
  private $model;
  private $title;
  private $view;
  function __construct(){
    $this->model= new FormModel();
    $this->admModel=new AdminModel();
    $this->loginController = new LoginController();
    $this->title = "Control de basura";
    $this->view = new FormView();
  }

  public function home(){
    $value = $this->loginController->isLogged();
    $user = $this->loginController->getUser();
    $userID = $this->loginController->getUserID();
    if ($value == "admin"){
      $reports = $this->admModel->fetchAllReports();
      $this->view->showAdminPage($this->title, $user, $reports);
    }else if ($value == "user"){

      $userComplaints=$this->model->getUserComplaint($userID);
      // foreach ($userComplaints as $key => $value) {
      //   echo ($value['id_reporte']);
      // }
      $this->view->showUserPage($this->title, $user, $userComplaints);
    }else{
      $this->view->showVisitorPage($this->title);
    }
  }
  public function successfulComplaint(){
    $user = $this->loginController->getUser();

    $this->view->successfulComplaint("denuncia exitosa",$user);
    }


  public function addComplaint(){ //Toma los datos del form y los envia al model para que los suba a la BD
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $details=$_POST['details'];
    $imageRoute=$_FILES['imagenes']['name'];
    $id_user= $this->loginController->getUserID();
    $this->model->createAComplaint($details,$latitude,$longitude,$imageRoute[0],$id_user);
    $this->successfulComplaint();
  }

  function isJPG($route){
    $tamaño = strlen($route)-3;
    $ext = substr($route, $size);
    return (($ext == "jpg") || ($ext == "png"));
  }
}

?>
