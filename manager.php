<?php
require_once  'vendor/autoload.php';
require_once  'place/place_one.php';
require_once  'place/place_two.php';
require_once  'Factory.php';


if($_GET != null){
	$data = $_GET;
}

$text = $data['text']; 
if (preg_match("/(од(на|но|ин)|перв(ый|ая|ое))/i", $text, $matches)){
	$pl_db = true;
}

Factory::setPlace($data,$pl_db);

if($_GET != null){
	if (@$_SERVER['HTTP_REFERER'] != null) {
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
}

?>