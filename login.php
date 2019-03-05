<?php session_start();


unset($_SESSION['login_error']);

$_SESSION['user_logged_in'] =  "no";

$error_count = 0;

$email = $_POST['staff_id'] != "" ? $_POST['staff_id'] : $error_count+1;
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

$login_statement = "SELECT id FROM staffinfo_tb WHERE staff_id ='$email' AND staff_password= '$password_hash'";

$run_query = $db_connection->query($login_statement);


if($run_query){
	//redirect them to the next page
	if ($run_query->num_rows > 0) {
		// echo "login successful";
		$_SESSION['user_logged_in'] = 'yes';
		header('location: salespage.php');

	}else{
		$_SESSION['login_error'] = "Login failed, user details not found";
		
		header('location: index.php');
	}
	

}else{
	//redirect them back to login page with error message saying login details not found
	$_SESSION['login_error'] = "login failed, an error occured :   " .  $db_connection->error;
	

}

$db_connection->close();
die();