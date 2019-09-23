<?php 

class db_class{
	private $config;
	private static $db = null;
	private $mysqli;
	public function __construct() {
		$this->mysqli = new PDO('mysql:dbname=form_test;host=localhost', 'root', '');
	}
	
	public static function getDB() {
		if (self::$db == null) self::$db = new db_class();
		return self::$db;
	}
	
	public function save($data, $table_name){
		$fields = array('name','tel','text');
		$query = "INSERT INTO ".$table_name." SET ";
		foreach ($fields as $field => $value){
			$query .= "$value = :$value, ";
		} 
		$query = substr($query, 0, -1);
		$query = substr($query, 0, -1);
		$result_pdo = $this->mysqli->prepare($query);
		$result_pdo->execute($data);	
	}
	
	
	
}


?>