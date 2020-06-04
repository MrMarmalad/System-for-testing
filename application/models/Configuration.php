<?php

namespace application\models;
/**
 *
 */
use application\core\Model;

class Configuration extends Model
{
  //delete this
  public function configure()
  {
    //  $sql = "SELECT * FROM users JOIN roles ON users.role = roles.roleNum WHERE users.login = :login AND users.password = :password";
    
    //return $this->db->row($sql,['login'=> $login, 'password' => $passwd]);
  }

  public function isAdminThere()
  {
    $sql = "SELECT * FROM roles JOIN users ON users.role = roles.roleNum WHERE roles.roleStr='admin'";
    if (count($this->db->row($sql)) != 0) {
      return 1;
    }
    else {
      return 0;
    }
  }

  public function test()
  {
    //debug($this->db);

  }


}



 ?>
