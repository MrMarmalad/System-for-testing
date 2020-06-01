<?php

namespace application\models;
/**
 *
 */
use application\core\Model;

class Main extends Model
{
  //delete this
  public function enter(string $login, string $passwd)
  {
    // $sql = "SELECT id, roleStr FROM `users` WHERE
    //  login = :login AND password =:password JOIN roles ON users.role = roles.roleNum";
    $sql = "SELECT * FROM users JOIN roles ON users.role = roles.roleNum WHERE users.login = :login AND users.password = :password";
    return $this->db->row($sql,['login'=> $login, 'password' => $passwd]);
     //echo empty($this->db->query($sql,['login'=> 'alex', 'password' => 'alex']));
  }

  public function test()
  {
    //debug($this->db);

  }


}



 ?>
