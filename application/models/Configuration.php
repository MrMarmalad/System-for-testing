<?php

namespace application\models;
/**
 *
 */
use application\core\Model;
use PDO;
class Configuration extends Model
{
  //delete this
  public function configure()
  {
    //  $sql = "SELECT * FROM users JOIN roles ON users.role = roles.roleNum WHERE users.login = :login AND users.password = :password";

    //return $this->db->row($sql,['login'=> $login, 'password' => $passwd]);
  }

  public function addUser($login, $password, $role, $fio, $date_reg, $direction=NULL, $course=NULL, $class=NULL ) {
    $sql = "INSERT INTO users(login, password, role, fio, direction, course, class, date_reg)
            VALUES (:login, :password, :role, :fio, :direction, :course, :class, :date_reg)";
    $stmt = $this->db->query($sql, ['login' => $login, 'password' => $password, 'role'=>$role,
    'fio' => $fio, 'direction' => $direction, 'course' => $course, 'class' => $class,
    'date_reg' => $date_reg]);
    return $this->db->getLastInsertId();
  //debug($this->db->errorInfo());
  }

  public function addAdmin($login, $password, $fio, $salt)
  {
    return $this->addUser($login, $password, 0, $fio, $salt);
  }

  public function getUsers()
  {
    $sql = "SELECT * FROM users JOIN roles ON roles.roleNum = users.role";
    $users = $this->db->row($sql, [], PDO::FETCH_CLASS);
    var_dump($users);
  }

  public function registerAdminAction()
  {

  }
  public function test()
  {
    //debug($this->db);

  }


}



 ?>
