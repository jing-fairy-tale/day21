<?php
	//字符编码
	header("Content-type: text/html; charset=utf-8");
	
	$arr[0]="12";
	$arr[1]="23";
	$arr[2]="34";
	
	echo "arr的元素个数是：".count($arr);
	for($i=0;$i<count($arr);$i++){
		echo "<br/>".$arr[$i];
	}
?>