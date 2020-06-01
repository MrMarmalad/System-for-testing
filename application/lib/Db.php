<?php

namespace application\lib;

/**
 *
 */
 use PDO;
class Db
{
  protected $db;

  function __construct()
  {
     $config = require 'application/config/db.php';

     //debug($config);
     $this->db = new PDO("mysql:host=${config['host']};dbname=${config['name']}",$config['user'], $config['password']);
  }

  public function query($sql, $params=[])
  {
    //echo "$sql";
    //debug($params);

    $stmt = $this->db->prepare($sql);
    if (!empty($params)){
      foreach ($params as $key => $val) {
        //echo "<br>$key    $val<br>";
        $stmt->bindValue(':'.$key, $val);
      }
    }

    $stmt->execute();
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    //var_dump(empty($stmt->fetchAll(PDO::FETCH_ASSOC)));
    return $stmt;
  }

  public function row ($sql, $params=[])
  {
    $result = $this->query($sql, $params);
    //debug($result. 'assad');
    if (($result != FALSE)){
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

  }

  public function col ($sql, $params=[])
  {
    $result = $this->query($sql, $params);
    return $result->fetchColumn();
  }
}






 ?>
