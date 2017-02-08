<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类
	class Zoo{
		//成员属性
		public static $name = "白白";
		//成员方法
		public static function fly(){
			return self::$name."正在飞....";
		}
	}
	//实例化成员属性
	Zoo::$name = "猪";
	//实例化成员方法
	echo Zoo::fly();
	