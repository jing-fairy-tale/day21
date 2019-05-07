<?php
	//字符编码
	header("Content-type: text/html; charset=utf-8");
	
	//1、接收前端传来的数据
//	$username = $_GET["username"];//前端html页面中，form的method是get
//	$userpass = $_GET["userpass"];

//	$username = $_POST["username"];//前端html页面中，form的method是post
//	$userpass = $_POST["userpass"];
	
	$username = $_REQUEST["username"];
	$userpass = $_REQUEST["userpass"];
	
	//echo "用户名是：".$username."<br/>密码是:".$userpass;
	
	//2、处理
	
	//3、响应
	
	echo "亲，恭喜您，注册成功！";

?>