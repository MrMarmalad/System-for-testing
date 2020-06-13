<?php

namespace application\models;
/**
 *
 */
use application\core\Model;
use application\lib\Security;
use PDO;

class Main extends Model
{
  //delete this
  public function enter(string $login, string $passwd)
  {
    // $sql = "SELECT id, roleStr FROM `users` WHERE
    //  login = :login AND password =:password JOIN roles ON users.role = roles.roleNum";

    //$sql = "SELECT * FROM users JOIN roles ON users.role = roles.roleNum WHERE users.login = :login AND users.password = :password";
    $ret_val = "not_found";
    if ($this->isAdminThere() == 0) {
      $ret_val = "register_admin";
    }
    else {
      $security = new Security();
      //debug($this->db);
      $sql = "SELECT login, password, date_reg, id, role  FROM users";
      $rows = $this->db->row($sql, ['login'=> $login, 'password' => $passwd], PDO::FETCH_CLASS);
      foreach ($rows as $key => $object) {
        $hashedLogPass = $security->setLogPass($login, $passwd, $object->date_reg);
        if (($login == $object->login) && ($hashedLogPass['password'] == $object->password))
          {
            $getRole = "SELECT * FROM roles WHERE roleNum= :num";
            $role = $this->db->row($getRole, ['num' => $object->role]);
            //var_dump($role);
            $ret_val= $role[0]['roleStr'];
            $security->setSession("roleStr", ['id' => $object->id, 'loginTime' => date("Y-m-d H:i:s")] );
          }
      }
    }
    return $ret_val;
    //return $this->db->row($sql,['login'=> $login, 'password' => $passwd]);
     //echo empty($this->db->query($sql,['login'=> 'alex', 'password' => 'alex']));
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
