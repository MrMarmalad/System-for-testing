<?php

namespace application\lib;

/**
 *
 */
class Security
{
  private $route;

  public function getPassword()
  {

  }

  public function setPassword($password, $salt)
  {
    $conf = require_once 'application/config/config.php';
    return hash('sha3-512', $password . $salt . $conf['key']);
  }

  public function __construct($route)
  {
    $this->route=$route;
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
