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
  function __construct(){
    $this->model= new AdminModel();
    $this->title = "mapa de recorridos";
    $this->view = new AdminView();
  }

  public function map(){ //llama a la vista y le pide que muestre el template del recorrido
    $reports = $this->model->fetchAllReports();
    $this->view->showMap($this->title,$reports);
  }

  public function report(){ //llama a la vista y le pide que muestre el template con la lista de reportes

    $reports = $this->model->fetchAllReports();
    // foreach($reports as $result) {
    //   echo $result['latitud'],$result['longitud'], '<br>';
    //     }
    $this->view->showReports($this->title,$reports);
  }

  public function editarEstado(){
    if (isset($_REQUEST['id'])){
      $edit = $_REQUEST['id'];
      $this->model->changeStatus($edit);
    }
    $this->map();

  }

}

?>
