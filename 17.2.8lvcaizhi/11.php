<?php
	header("Content-Type:text/html;charset=utf-8");
	class Zoo{
		//成员属性
		public static $name = "红蓝";
		//成员方法
		public static function fly(){
			return self::$name."正在飞...";
		} 
	}
	ZOO::$name = "狗";//实例化时直接用类名：：属性名
	echo ZOO::fly();//实例化时直接用类名：：方法名