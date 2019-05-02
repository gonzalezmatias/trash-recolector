<?php
require_once  "./view/FormView.php";
require_once  "./model/FormModel.php";
//El route llama al controller y este se encarga de derivar la tarea solicitada al model o a la vista según corresponda
class FormController
{
  // private $model;
  private $titulo;
  private $view;
  function __construct(){
    $this->model= new FormModel();
    $this->titulo = "Formulario Principal";
    $this->view = new FormView();
  }

  public function home(){ //llama a la vista y le pide que muestre el template del formulario
    $this->view->mostrar($this->titulo);
  }
  public function denunciaExitosa(){
    $this->view->denunciaExitosa("denuncia exitosa");
  }
 

  public function agregarDenuncia(){ //Toma los datos del form y los envia al model para que los suba a la BD
    $latitud=$_POST['latitude'];
    $longitud=$_POST['longitude'];
    $detalle=$_POST['details'];
    $rutaTempimagen=$_FILES['imagenes']['name'];
    $id_usuario=99999;
    $this->model->createAComplaint($detalle,$latitud,$longitud,$rutaTempimagen[0],$id_usuario);
    $this->denunciaExitosa();
  }



  function sonJPG($ruta){

    $tamaño = strlen($ruta)-3;
    $ext = substr($ruta, $tamaño);
    return     (($ext == "jpg") || ($ext == "png"));


  }
}

?>
