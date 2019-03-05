<?php

$error_count = 0;

$name = $_POST['staff_name'] != "" ? $_POST['staff_name'] : $error_count+1 ;
$email = $_POST['staff_id'] != "" ? $_POST['staff_id'] : $error_count+1;
$phone = $_POST['staff_phone'] != "" ? $_POST['staff_phone'] : $error_count+1;
$password = $_POST['staff_password'] != "" ? $_POST['staff_password'] : $error_count+1;

if($error_count > 0){
	echo "Errors found, all fieds are required";
	die;
}

$password_hash = md5($password);

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'lipsome_store';

$db_connection = new mysqli($db_host,$db_username,$db_password,$db_name);

if($db_connection->connect_error){
	print_r($db_connection->connect_error);
	die;
}

$create_staff_statement = "INSERT INTO staffinfo_tb (staff_name,staff_id,staff_phone,staff_password) VALUES ('$name','$email','$phone','$password_hash')";


$run_query = $db_connection->query($create_staff_statement);

if($run_query){
	echo "Staff data added successfully";
}else{
	echo "An error occurred, staff was not created " . $db_connection->error;
}

$db_connection->close();

die();



