<?php

namespace application\core;

use application\core\View;

 abstract class Controller
{
  public $route;
  public $view;
  public $model;
  protected $acl;

  function __construct($route)
  {
    $this->route=$route;
    if (empty($this->acl))
    {
      View::errorCode(500);
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

  protected function checkAcl()
  {
    if (empty($acl))
    {
      $this->acl = require 'application\acl\\' . $this->route['controller'].'.php';
    }

  }

  protected function inAcl(string $key)
  {
    return in_array($this->route['action'], $this->acl["$key"]);
  }
}




 ?>
