<?php


namespace application\core;

use application\lib\Db;
use application\lib\Security;
use PDO;
abstract class Model {

	public $db;
	public $security;
	public function __construct() {

		$this->db = new Db;
	}

}




 ?>
