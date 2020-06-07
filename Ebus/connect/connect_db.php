<?php

	$hostName = 'localhost';
	$userName = 'root';
	$passWord = '';
	$databaseName = 'ebus';
	$connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
	if (!$connect) {
	    exit('Kết nối không thành công!');
	}
	
?>