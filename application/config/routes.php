<?php

return [
    '' => [
      'controller' => 'main',
      'action' => 'index'
    ],
    'enter' => [
      'controller' => 'main',
      'action' => 'enter'],

      'configuration' => [
        'controller' => 'configuration',
        'action' => 'configure',
      ],

      'configuration/registerAdmin' => [
        'controller' => 'configuration',
        'action' => 'registerAdmin',
      ],

      'configuration/addAdmin' => [
        'controller' => 'configuration',
        'action' => 'addAdmin',
      ],

      'admin/index' => [
        'controller' => 'configuration',
        'action' => 'index',
      ],

      'admin/users' => [
        'controller' => 'configuration',
        'action' => 'users',
      ],

      'about' => [
        'controller' => 'main',
        'action' => 'about'],

    'account/login' => [
      'controller' => 'account',
      'action' => 'login'
    ],
    'test/testaction' => [
      'controller' => 'test',
      'action' => 'testaction'
    ],
];


 ?>
