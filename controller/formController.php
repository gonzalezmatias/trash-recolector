<?php
require_once  "./view/FormView.php";
require_once  "./model/FormModel.php";
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

    public function home()
    {
        $this->view->mostrar($this->titulo);
    }

    public function agregarDenuncia(){
     $latitud=$_POST['latitud'];
    $longitud=$_POST['longitud'];
    $detalle=$_POST['details'];
    $rutaTempimagen=$_FILES['imagenes']['name'];
    $id_usuario=99999;
    $this->model->createAComplaint($detalle,$latitud,$longitud,$rutaTempimagen,$id_usuario);





    }

    

    function sonJPG($ruta){
      
                    $tamaño = strlen($ruta)-3;
                    $ext = substr($ruta, $tamaño);
           return     (($ext == "jpg") || ($ext == "png"))
        
        
      }
}

?>
