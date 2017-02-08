<?php
	header("Content-Type:text/html;charset=utf-8");
	//自动加载
	function __autoload($name){
		include($name.".php");
	}
	$bird = new Bird();
	echo $bird -> fly();