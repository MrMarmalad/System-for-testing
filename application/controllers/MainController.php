<?php

namespace application\controllers;
/**
 *
 */
 use application\core\Controller;

class MainController extends Controller
{
  protected $acl = [
    'all'=>['indexAction',
           ]
  ];

  public function indexAction()
  {
    //$this->model->test();

    $this->view->render('Стартовая страница');
    //var_dump($this->model->enter('alex', 'alex'));
  }

  public function enterAction()
  {
    var_dump($this->model->enter('alex', 'alex'));
  }
  public function registerAction()
  {
    echo "register";
  }
}



 ?>
