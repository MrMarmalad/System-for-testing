<?php

namespace application\core;


use application\core\View;
use application\lib\Db;
/**
 *
 */
class Router
{
  protected $routes=[];
  protected $params=[];
  function __construct()
  {
    $url = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
    $urlArray = explode('/',$url);

    if ($urlArray[0] == "")
    {
      $num =0;
    }
    else {
    $num = count($urlArray);
    }
    //var_dump($urlArray, $num);
    switch ($num) {
      case 0:
        $controller = 'main';
        $action = 'index';
        $url = '';
        break;
      case 1:
        $controller = 'main';
        $action = $urlArray[0];
        $url = $action;
        break;
      default:
        $controller = $urlArray[0];
        $action = $urlArray[1];
        $url = $controller . '/' .$action;
        break;
    }

    $this->add($url, ['controller'=> $controller, 'action'=> $action]);

     }


  protected function add($route, $params)
  {
    //var_dump($route, $params);
    $route = '~^'. $route . '$~';
    $this->routes[$route] = $params;
  }

  protected function match() {
          $url = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
          foreach ($this->routes as $route => $params) {
              if (preg_match($route, $url, $matches)) {
                  $this->params = $params;
                  return true;
              }
          }
          return false;
      }

  function load_config()
  {
    //return  require_once('application/config/routes.php');
  }

  public function run()
  {
//    $asd = new Db();
    if ($this->match())
    {
      $path = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
      if(class_exists($path))
      {
        //echo "1<br>";
        $action = $this->params['action'] . 'Action';
        if (method_exists($path, $action))
        {
          //echo "2<br>";
          $controller = new $path($this->params);
          $controller->$action();
        }
        else
        {
          //debug([$path, $action]);
          View::errorCode(404);
        }
      }
      else
      {
        View::errorCode(404);
      }
    }
    else {
        View::errorCode(404);
    }
  }
}


 ?>
