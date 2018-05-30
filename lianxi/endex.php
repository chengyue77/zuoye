<?php
	$GetUsername = $_GET['user'];
	$MyUser = 'zhangsan';
	$GetUsermima = $_GET['password'];
	$Mypassword = '123456';
	if($GetUsername==$MyUser&&$GetUsermima==$Mypassword){
		echo 'ok';
	}else{
		echo 'error';
	}
?>
