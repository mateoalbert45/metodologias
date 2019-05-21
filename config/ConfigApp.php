<?php

//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
//dirname($_SERVER["PHP_SELF"]);
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/home');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      'login' => 'LoginController#login', // CAMBIAR DESPUÉS
      'jefe'=> 'JefeController#Home',
      'ciudadano'=> 'CiudadanoController#Home',
      'verFormulario'=>'CiudadanoController#mostrarFormulario',
      'AgregarDenuncia'=> 'CiudadanoController#insertarDenuncia',
      'home' => 'CiudadanoController#mostrarFormulario'
    ];

    }
 ?>
