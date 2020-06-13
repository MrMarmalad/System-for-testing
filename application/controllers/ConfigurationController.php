<?php

namespace application\controllers;
/**
 *
 */
 use application\core\Controller;
 use application\lib\Security;


 /**
  *
  */
 class ConfigurationController extends Controller
 {

   protected $acl = [
     'all'=>['registerAdminAction',]
   ];


   public function registerAdminAction()
   {
       $this->view->render('Регистрация администратора',['menu' => 'defaultMenu']);
   }

   public function addAdminAction()
   {
     $hashArray = $this->security->setLogPass($_POST['passwordAdm']);
     $status = $this->model->addAdmin($_POST['loginAdm'], $hashArray['password'], $_POST['fio'], $hashArray['salt']);
     $this->redirect('/');
     //var_dump($status);
     //$this->security->setSession('admin',)
     //debug($status);
     //echo "complete";
     //$this->redirect()
   }




 }
