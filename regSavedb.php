<?php
	//字符编码
	header("Content-type: text/html; charset=utf-8");
	//1、接收前端传来的数据
	$username = $_REQUEST["username"];
	$userpass = $_REQUEST["userpass"];
	//2、处理
	  //1）、连接数据库(搭桥)
	  $con = mysql_connect("localhost","root","qianfeng");
	  if(!$con){
	  	  die('Could not connect: '.mysql_error());
	  }else{
		  //2）、选择数据库（选择交流的目的地，对象）
		  mysql_select_db("db1803",$con);
		  
		  //3）、执行语句（SQL语句）（数据的传输）
	  	  $sqlstr="insert into userTable(username,userpass) values('".$username."','".$userpass."')";
	  	  echo $sqlstr;
	  	  mysql_query($sqlstr,$con);
	  }	  
	  //4）、关闭数据库（拆桥）
	  mysql_close($con);
	  
	//3、响应
	
	echo "亲，恭喜您，注册成功！";

?>