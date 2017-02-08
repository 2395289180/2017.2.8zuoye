<?php
	header("Content-Type:text/html;charset=utf-8");
	class Zoo{
		//成员方法
		public function fly(){
			return "正在飞......";
		}
		//__call魔术方法
		public function __call($name,$val){
			return $name."这个方法不存在";
		}
	}
	//实例化对象
	$obj = new Zoo();
	echo $obj -> qwe();