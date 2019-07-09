<?php

session_start();

// for redirect

header('location:Reservation.php');

// end redirect

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "connect successfull";
}else{
	echo "not connect";
}

mysqli_select_db($con, 'signin');

//for initialize variable

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$location = $_POST['location'];
$date = $_POST['date'];
$time = $_POST['time'];
$seat = $_POST['seat'];

//for initialize variable for contact form
$c_name = $_POST['name'];
$c_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// then query for reserve
$q = "select * from reserve where name = '$name' && email = 'email' && contact = 'contact' && location = 'location' && date = 'date' && time = 'time' && seat = 'seat'";

$result = mysqli_query($con ,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "duplicate data";
}else{
	$qy="insert into reserve(name , email , contact , location , date , time , seat ) values ('$name' , '$email' , '$contact' , '$location' , '$date' , '$time' , '$seat')";
	mysqli_query($con , $qy);
}

// then query for contact
$qc = "select * from contact where name = '$c_name' && email = 'c_email' && phone = 'phone' && message = 'message'";
$result1 = mysqli_query($con ,$qc);
$num1 = mysqli_num_rows($result1);

if ($num1 == 1) {
	echo "duplicate data";
}else{
	$qz="insert into contact(name , email , phone , message ) values ('$c_name' , '$c_email' , '$phone' , '$message')";
	mysqli_query($con , $qz);
}



?>