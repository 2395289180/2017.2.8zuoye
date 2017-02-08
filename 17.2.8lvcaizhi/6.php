<?php 
	header("Content-Type:text/html;charset=utf-8"); 
	//接口类 
	interface Usb{ 
		public function run(); 
	} 
	//继承 
	class jianpan implements Usb{ 
		public function run(){ 
			return "键盘正在运行....";
		} 
	} 
	//继承 
	class shubiao implements Usb{ 
		public function run(){ 
			return "鼠标正在运行...."; 
		} 
	} 
	//电脑类 
	class Computer{ 
		public function runUsb($name){ 
			$obj = $name; 
			return $obj -> run(); 
		} 
	} 
	//实例化电脑类 
	$computer = new Computer(); 
	echo $computer -> runUsb(new shubiao); 