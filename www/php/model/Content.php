<?php
require_once DIR_SYS.'/Config.php';

class Content {

	private static $instance;

	// ========================
	// = production variables =
	// ========================

	var $items;

	private function __construct () {

	
		$this->items = simplexml_load_file(DIR_WEB. '/xml/content.xml');
			
	}

	public static function getInstance () {

	    if (!isset(self::$instance)) {
        	$c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
	}

	public function getItems(){
		 return $this->items;
	}
}
?>

