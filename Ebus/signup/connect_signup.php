<?php

	$hostName = 'localhost';
	$userName = 'root';
	$passWord = '';
	$databaseName = 'signup';
	$connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
	if (!$connect) {
	    exit('Kết nối không thành công!');
	}
	echo 'Kết nối thành công!';
?>