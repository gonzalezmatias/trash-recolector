<?php
require_once  "./view/FormView.php";
require_once  "./model/FormModel.php";
//El route llama al controller y este se encarga de derivar la tarea solicitada al model o a la vista según corresponda
class FormController
{
  // private $model;
  private $title;
  private $view;
  function __construct(){
    $this->model= new FormModel();
    $this->title = "Formulario Principal";
    $this->view = new FormView();
  }

  public function home(){ //llama a la vista y le pide que muestre el template del formulario
    $this->view->showForm($this->title);
  }
  public function successfulComplaint(){
    $this->view->successfulComplaint("denuncia exitosa");
  }


  public function addComplaint(){ //Toma los datos del form y los envia al model para que los suba a la BD
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $details=$_POST['details'];
    $imageRoute=$_FILES['imagenes']['name'];
    $id_user=99999;
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
