<?php 
require_once 'db_class.php';

class place_one{
	
	public $db_connect;
	public $data;
	
	public function __construct($data) {
		$this->db_connect = db_class::getDB();
		$this->data = $data;
		$this->db_connect->save($this->data,'form');
	}
	
	
}
?>