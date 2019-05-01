<?php
require_once  "./view/formView.php";
//require_once  "./model/FormMode.php";
class formController
{
   // private $model;
    private $Titulo;
    private $view;
    function __construct(){
       // $model= new FormMode();
        $Titulo = "Formulario Principal";
        $view = new formView();

    }
    public function Home()
    {
        $this->view->Mostrar($this->Titulo);
    }
}

?>