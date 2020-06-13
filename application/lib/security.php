<?php

namespace application\lib;

/**
 *
 */
class Security
{
  private $route;
  //private $salt;


  public function __construct($route="")
  {
    $this->route=$route;
  }

  public function setHash($str, $salt=NULL)
  {
    //var_dump(['str' => $str, 'salt' => $salt]);
    $conf = require_once 'application/config/config.php';
    //echo hash('sha256', $str . $salt . $conf['key']).'<br>';
    //hash('sha256', $str . $salt . $conf['key']);
    return hash('sha256', $str . $salt . $conf['key']);
  }

  public function setLogPass($pass, $log=NULL, $salt=NULL)
  {
    if (!isset($salt)){
      $salt = date("Y-m-d H:i:s");      // 2001-03-10 17:16:18 (формат MySQL DATETIME)
    }
    $hashLogin = $this->setHash($log, $salt);
    $hashLogin = $this->setHash($log, $salt);
    $hashPassword = $this->setHash($pass, $salt);
    return ['login' => $hashLogin, 'password' => $hashPassword, 'salt' => $salt];
  }

  public function setSession($role, $statement=[])
  {
    session_start();
    $_SESSION['role'] = $role;
    foreach ($statement as $key => $value) {
      $_SESSION[$key] = $value;
    }
    session_write_close();
    //var_dump($_SESSION);
  }

  public function getSession()
  {
    // code...
  }

  public function access($role='guest', $key=NULL, $acl=NULL)
  {
    return TRUE;
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
