<?php

namespace application\models;
/**
 *
 */
use application\core\Model;
use application\lib\Security;
use application\models\Configuration;
use PDO;


class Admin extends Model
{

    public function getUsers($role=NULL, $ids=[], $cols=[])
    {
      $params =[];
      $sql = "SELECT id, fio, direction, course, class, roleStr, login FROM users JOIN roles ON users.role=roles.roleNum";

      if (!empty($role) || !empty($ids))
      {
        $sql .= " WHERE";
        if (!empty($role)) {
          $sql .= " roles.roleNum= :role OR";
          $params += ['role' => $role];
        }
        if (!empty($ids)) {
          foreach ($ids as $key => $id) {
            $sql .= " users.id = :$key OR";
          }
          $params += $ids;
        }

        $num = strripos($sql,"OR");
        if ($num !== FALSE)
        {
        $sql = substr($sql, 0, $num);
        }
        }
        $users = $this->db->row($sql, $params);
        return ['users' => $users, 'cols' => ['ID', 'ФИО', 'Направление', "Курс", "Группа", "Роль", "Логин"]];
    }
    public function deleteUsers($ids, $sessid)
    {
      $sql ="DELETE FROM users WHERE";
      foreach ($ids as $key => $id) {
        if ($id != $sessid)
        {
          $sql .= " users.id = :$key OR";
        }
        else {
          unset($ids["$key"]);
        }
      }
      $sql = substr($sql, 0, strripos($sql,"OR"));
      $this->db->query($sql, $ids);
    }

    public function addUsers($createReport=NULL)
    {
      //var_dump($_POST);
      foreach ($_POST as $key => $value) {
        if ($key!= "createReport")
        {
        $col_and_num = explode(':', $key);
        //var_dump($col_and_num);
        $users[$col_and_num[1]][$col_and_num[0]] = $value;
        //var_dump($value);
        }
      }
      $config = new Configuration();
      $security = new Security();
      if ($createReport==TRUE)
      {
        $report = fopen("temp/report.txt", 'w');
        //fwrite($report,"asd");
        //var_dump($report);
      }
      foreach ($users as $key => $arr) {
        switch ($arr["role"]) {
          case 'teacher':
            $hashArray = $security->setLogPass($arr["password"]);
            $config->addUser($arr['login'], $hashArray['password'],2, $arr['fio'], $hashArray['salt']);
            if ($createReport==TRUE)
            {
            fwrite($report, $arr['login']."\t". $arr['password']."\t". "преподаватель"."\t". $arr['fio']."\t". $hashArray['salt'] . "\r\n");
            }
            break;
          case 'testable':
            $hashArray = $security->setLogPass($arr["password"]);
            $config->addUser($arr['login'], $hashArray['password'],1, $arr['fio'], $hashArray['salt'], $arr['direction'], $arr['course'], $arr['group']);
            if ($createReport==TRUE)
            {
            fwrite($report, $arr['login']."\t". $arr['password']."\t". "тестируемый"."\t". $arr['fio']."\t". $hashArray['salt'] ."\t". $arr['direction'] ."\t". $arr['course'] ."\t". $arr['group'] . "\r\n");
            }
            break;
          case 'admin':
            $hashArray = $security->setLogPass($arr["password"]);
            $hashArray = $security->setLogPass($arr["password"]);
            $config->addUser($arr['login'], $hashArray['password'],0, $arr['fio'], $hashArray['salt']);
            if ($createReport==TRUE)
            {
            fwrite($report, $arr['login']."\t". $arr['password']."\t". "администратор"."\t". $arr['fio']."\t". $hashArray['salt'] . "\r\n");
            }
            break;
        }
      }
      if ($createReport==TRUE)
      {
        fclose($report);
      }
    }

    public function changeUsers($ids)
    {
      $users = $this->getUsers(NULL, $ids);
      var_dump($users);
    }

}
