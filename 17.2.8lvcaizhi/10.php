<?php
	header("Content-Type:text/html;charset=utf-8");
	//static 关键字 静态 不用实例化
	class Zoo{
		//成员属性
		public static $name = "黑白";
		//成员方法
		public static function fly(){
			return self::$name."正在飞..";//用self调用
		}
	}
	Zoo::$name = "百灵";
	echo Zoo::fly();