<?php

namespace application\core;

use application\core\View;
use application\lib\Security;

 abstract class Controller
{
  public $route;
  public $view;
  public $model;
  protected $acl;
  protected $security;
  function __construct($route)
  {
    $this->route=$route;
    //echo $this->route['action'];
    if (empty($this->acl))
    {
      View::errorCode(500);
    }
    else {
      $this->security= new Security($this->route);
      //if ($this->security->access())
    }
    //$this->checkAcl();
    $this->view = new View($this->route);
    $this->model = $this->loadModel($route['controller']);

  }

  // public function __call($name)
  // {
  //   if (stripos($name, "Action") !== FALSE)
  //   {
  //     if ()
  //   }
  // }

  public function loadModel($name)
  {
    $path = 'application\models\\'. ucfirst($name);
    //debug($path);
    if (class_exists($path)){
      return new $path;
    }
  }


}




 ?>
