<?php

namespace application\core;

/**
 *
 */
class View
{
  public $path;
  public $route;
  public $layout = 'default';
  public $custom_scripts =[];
  function __construct($route)
  {
    $this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
    //echo   $this->path;
    $this->view->custom_scripts[]='<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">';
    $this->view->custom_scripts[]='<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>';
  }


  public function render($title, $vars=[])
  {
    extract($vars);
    $path = 'application/views/'.$this->path.'.php';
		if (file_exists($path)) {
			ob_start();
      if (isset($custom_scripts)){
        $custom_scripts = $this->custom_scripts + $custom_scripts;
      }

      if (isset($menu))
      {
        $pathToMenu = 'application/views/menu/' . $menu . '.php';
        //echo $pathToMenu;
        if (file_exists($pathToMenu))
        {

          require $pathToMenu;
        }
      }

      else {
        $custom_scripts = $this->custom_scripts;
      }

			require $path;
			$content = ob_get_clean();
			require 'application/views/layouts/'.$this->layout.'.php';
		}
  }

  public function redirect($url)
  {
    header('location: ' .$url);
    exit;
  }
  public static function errorCode($code, $layout="default", $custom_scripts=[])
  {
    http_response_code($code);
    $custom_scripts[]='<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">';
    $custom_scripts[]='<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>';
    $path = 'application/views/errors/'.$code.'.php';
    if (file_exists($path)) {
    ob_start();
    require $path;
    $content = ob_get_clean();
    require 'application/views/layouts/'.$layout.'.php';
    exit;
  }
  }
}


 ?>
