<?php

define('LOCATION', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('HOME', LOCATION);
define('ADMIN', LOCATION . '/admin');

//define('PROD', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]).'/productos');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [

      'home'=>'formController#home',
      'agregarDenuncia'=>'FormController#addComplaint',
      'verDenuncia'=>'FormController#successfulComplaint',
      'recorrido'=>'AdminController#map',
      'reportsList'=>'AdminController#report',
      'editarEstado'=>'AdminController#editarEstado',



    ];

}
