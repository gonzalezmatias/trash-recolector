<?php

//El route se encarga de redireccionar al controller correspondiente a lo que se quiera hacer (por ahora solo está)
//implementada la redirección al form
require_once "config/ConfigApp.php";
require_once "controller/FormController.php";



function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){

    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]);
        $controller =  new $action[0]();
        $metod = $action[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metod($params);
        }
        else{
            echo $controller->$metod();
        }
    }else{
      $controller =  new FormController();
      echo $controller->home();
    }
}
 ?>
