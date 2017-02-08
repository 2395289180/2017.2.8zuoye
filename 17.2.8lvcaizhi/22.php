<?php
	header("Content-Type:text/html;charset=utf-8");
	//串行化和反串行化
	class Zoo{
		//成员属性
		public $name = "哈哈";
		public $age = 30;
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		public function __clone(){
			$this -> name = "我";
		}
	}
	//实例化对象
	$bird = new Zoo();
	//串行化
	$obj = serialize($bird);
	var_dump($obj);
	//反串行化
	$demo = unserialize($obj);
	var_dump($demo);