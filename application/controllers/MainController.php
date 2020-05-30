<?php

namespace application\controllers;
/**
 *
 */
 use application\core\Controller;

class MainController extends Controller
{


  public function indexAction()
  {
    //$this->model->test();
    $this->view->render('Стартовая страница');
  }

  public function registerAction()
  {
    echo "register";
  }
}



 ?>
