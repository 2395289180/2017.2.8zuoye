<?php
	header("Content-Type:text/html;charset=utf-8");
	class Zoo{
		public function fly(){
			return "正在飞....";
		}
		//__toString魔术方法
		public function __toString(){
			return "这是一个正在飞的方法";
		}
	}
	echo $bird = new Zoo();