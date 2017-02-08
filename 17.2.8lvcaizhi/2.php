<?php 
	header("Content-Type:text/html;charset=utf-8"); 
	class Zoo{ 
		//成员属性 
		public $name; 
		//成员方法 
		public function __construct($name){ 
			$this -> name = $name; 
		} 
		public function pa(){ 
			return $this -> name."正在爬....."; 
		} 
	} 
	abstract class Bird{ 
		//成员属性 
		public $age; 
		public function fly(){ 
			return "正在飞.."; 
		} 
		abstract function chi(); 
	} 
	interface Dog{ 
		const NAME = "小狗"; 
		public function jiao(); 
	} 
	$obj = new Zoo("白白"); 
	echo $obj -> pa(); 