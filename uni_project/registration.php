<?php

session_start();

// for redirect

header('location:login.php');

// end redirect

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "connect successfull";
}else{
	echo "not connect";
}

mysqli_select_db($con, 'signin');

//for initialize variable

$name = $_POST['user'];
$pass = $_POST['password'];

// then query
$q = "select * from admin where name = '$name' && password = '$pass' ";

$result = mysqli_query($con ,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "duplicate data";
}else{
	$qy="insert into admin(name , password) values ('$name' , '$pass')";
	mysqli_query($con , $qy);
}



?>