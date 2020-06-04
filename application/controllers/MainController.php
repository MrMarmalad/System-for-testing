<?php

namespace application\controllers;
/**
 *
 */
 use application\core\Controller;
 use application\lib\Security;

class MainController extends Controller
{
  protected $acl = [
    'all'=>['indexAction',
            'enterAction',]
  ];

  public function indexAction()
  {
    //$this->model->test();

    $this->view->render('Стартовая страница', ['menu' => 'defaultMenu']);

    //echo $passwd->setPassword('alex','03031998');
    //var_dump($this->model->enter('alex', 'alex'));
  }

  public function enterAction()
  {
    var_dump($this->model->enter($login, $password));
  }
  public function registerAction()
  {
    echo "register";
  }
}



 ?>
