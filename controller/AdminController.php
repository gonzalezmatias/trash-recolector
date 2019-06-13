<?php
require_once  "./view/AdminView.php";
require_once  "./model/AdminModel.php";

//El route llama al controller y este se encarga de derivar la tarea solicitada al model o a la vista según corresponda
class AdminController
{
  // private $model;
  private $title;
  private $view;
  private $model;
  private $loginController;
  function __construct(){
    $this->model= new AdminModel();
    $this->title = "mapa de recorridos";
    $this->loginController = new LoginController();
    $this->view = new AdminView();
  }

  public function map(){ //llama a la vista y le pide que muestre el template del recorrido
    $reports = $this->model->fetchAllReports();
    $user= $this->loginController->getUser();
    $this->view->showMap($this->title,$reports,$user);
  }

  public function report(){ //llama a la vista y le pide que muestre el template con la lista de reportes

    $reports = $this->model->fetchAllReports();
    $this->view->showReports($this->title,$reports);
    // foreach($reports as $result) {
    //   echo $result['latitud'],$result['longitud'], '<br>';
    //     }
  }

  public function editarEstado(){
    if (isset($_REQUEST['id'])){
      $edit = $_REQUEST['id'];
      $this->model->changeStatus($edit);
    }
    // $reports = $this->model->fetchAllReports();
    // $user= $this->loginController->getUser();
    // echo $user;
    header(HOME);


  }

}

?>
