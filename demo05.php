<?php
	
	$arr[0]=12;
	$arr[1]="俄罗斯世界杯终于结束了";
	$arr[2]="法国获得了大力神杯";
	
	$str="";
	for($i=0;$i<count($arr);$i++){
		$str = $str.$arr[$i]."<br/>";
	}
	
	echo '<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
			<title></title>
		</head>
		<body>
			<div style="width:200px;height:200px;background-color:red">
		'.$str.'
			</div>
			<p>我是p</p>		
			<h1>我是h1</h1>		
		</body>
	</html>
	';
?>
