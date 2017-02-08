<?php
	header("Content-Type:text/html;charset=utf-8");
	class Zoo{
		public static $obj = null;
		public static function creatObj(){
			if(is_null(self::$obj)){
				self::$obj = new self();
			}
			return self::$obj;
		}
		public function pa(){
			return "爬……";
		}
	}
	//实例化
	$bird = Zoo::creatObj();
	echo $bird -> pa();