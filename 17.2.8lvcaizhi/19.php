<?php
	header("Content-Type:text/html;charset=utf-8");
	//__clone魔术方法
	class Zoo{
		public $name = "哈哈";
		public $age = 30;
		public function fly(){
			return "正在飞......";
		}
		public function __clone(){
			$this -> name = "我";
		}
	}
	$bird = new zoo();
	var_dump($bird);
	$dog = clone $bird;//克隆
	var_dump($dog);