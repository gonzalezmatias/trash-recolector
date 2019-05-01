<?php
require_once  "./view/FormView.php";
//require_once  "./model/FormModel.php";
class FormController
{
   // private $model;
    private $titulo;
    private $view;
    function __construct(){
       // $model= new FormModel();
        $this->titulo = "Formulario Principal";
        $this->view = new FormView();
    }

    public function home()
    {
        $this->view->mostrar($this->titulo);
    }

    

    function sonJPG($rutas){
        foreach ($rutas as $ruta) {
                    $tamaño = strlen($ruta)-3;
                    $ext = substr($ruta, $tamaño);
                    if(($ext == "jpg") || ($ext == "png")){
                      $valor=true;
                    }
        }
        if($valor!=true){
          $valor=false;
        }
        return $valor;
      }
}

?>
