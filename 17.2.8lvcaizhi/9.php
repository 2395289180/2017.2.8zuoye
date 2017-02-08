<?php 
	header("Content-Type:text/html;charset=utf-8"); 
	//关键字 final 
	final class Zoo{ 
		public function fly(){ 
			return "正在飞...."; 
		} 
	} 
	//继承 final无法被继承 
	class Bird extends Zoo{ 
		 
	} 
	//实例化 
	$obj = new Bird(); 
	echo $obj -> fly; 