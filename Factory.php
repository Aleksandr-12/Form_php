<?php
require_once 'place/place_one.php';
require_once 'place/place_two.php';


class Factory{
	
	
	public static function setPlace($data,$pl_db = null){
		
		if($pl_db == true){
			new place_one($data);
		}else{
			new place_two($data);
		}
	}
	
}

?>