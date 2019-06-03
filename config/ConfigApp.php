<?php

define('LOCATION', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('ADMIN', LOCATION . '/admin');
define('HOME', LOCATION);
define('VISITOR', LOCATION. '/login');

//define('PROD', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]).'/productos');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [

      'home'=>'FormController#home',
      'agregarDenuncia'=>'FormController#addComplaint',
      'verDenuncia'=>'FormController#successfulComplaint',
      'recorrido'=>'AdminController#map',
      'reportsList'=>'AdminController#report',
      'editarEstado'=>'AdminController#editarEstado',
      'registrarse' => 'LoginController#createAccount',
      'verificarRegistro' => 'LoginController#verifyRegister',
      'login' => 'LoginController#login',
      'verificarLogin' => 'LoginController#verifyLogin',
      'logout' => 'LoginController#logout'



    ];

}
