<?php

namespace application\controllers;
/**
 *
 */
 use application\core\Controller;
 use application\lib\Security;


 class AdminController extends Controller
 {
   protected $acl = [
     'admin' => 'indexAction',
   ];
   public function indexAction()
   {
     $this->delete();
     $this->view->render('Панель администратора',['menu' => 'defaultMenu']);
   }


   public function changeUsersAction()
   {
     //var_dump($_POST);
     $this->delete();
     $users = $this->model->getUsers(NULL, $_POST);
     $this->view->render('Список пользователей',['menu' => 'defaultMenu', 'users' => $users['users'], 'cols' => $users['cols']]);
     //var_dump($users);
   }

   public function deleteUsersAction()
   {
     $this->delete();
     session_start();
     $idAdmin = (int) $_SESSION['id'];
     session_write_close();
     $this->model->deleteUsers($_POST, $idAdmin);
     $this->redirect('users');
   }

   public function usersAction()
   {
     $this->delete();
     $query = $this->model->getUsers();
     $this->view->render('Список пользователей',['menu' => 'defaultMenu', 'users' => $query['users'], 'cols' => $query['cols']]);
   }

   public function addUsersAction()
   {
     $this->view->render('Добаить пользователей',['menu' => 'defaultMenu']);
   }

   public function applyNewUsersAction()
   {
    //var_dump($_POST['createReport']);
    if (!empty($_POST['createReport']))
    {
      $this->model->addUsers(TRUE);
      $this->redirect('reportLink');
    }
    else {
      $this->model->addUsers(FALSE);
    }
    }

    public function reportLinkAction()
    {
      $this->view->render('Ссылка на скачивание', ['menu' => 'defaultMenu', 'link' => '/temp/report.txt']);
    }
     // foreach ($_POST as $key => $value) {
     //$this->model->addUsers();

     private function delete()
     {
       $path = 'temp/report.txt';
       if (file_exists('temp/report.txt'))
       {
         unlink($path);
       }
       $this->redirect('users');
     }


   public function applyChangesAction()
   {
     var_dump($_POST);
   }

 }
