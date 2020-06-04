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

   function __construct(argument)
   {
   }

   public function configureAction()
   {
     if ($this->model->isAdminThere() === 0)
     {
       $this->view->render('Первоначальная конфигурация')
     }
   }
 }
