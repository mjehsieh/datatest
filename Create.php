<?php

/* **
 *  Create a new user to USER_ACCOUNT_TABLE.
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['store_user_name']) && isset($_POST['store_user_address']) && 
		isset($_POST['email_address']) && isset($_POST['phone_number']))
{	
	// get values
	$store_user_name = $_POST['store_user_name'];
	$store_user_address = $_POST['store_user_address'];
	$email_address = $_POST['email_address'];
	$phone_number = $_POST['phone_number'];
	
	// include db connect class
	require_once __DIR__ . '/db_connect.php';
	
	// connecting to db
	$db = new DB_CONNECT();
	
	// create data to user account table
	$sql = "INSERT INTO USER_ACCOUNT_TABLE (store_user_name, store_user_address, email_address, phone_number)
					values ('$store_user_name', '$store_user_address', '$email_address', '$phone_number')";
	$result = mysql_query($sql) or die(mysql_error());
	
	// check if row inserted or not
	if ($result) {
		// successfully insert
		$response["success"] = 1;
		$response["message"] = "Successfully create a new user.";
		
		// echoing JSON response
		echo json_encode($response);
	}	else {
		// result is null
		$response["success"] = 0;
		$response["message"] = "result = null";
		
		// echoing JSON response
		echo json_encode($response);
	}
} else {
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "Required field(s) is missing";
	
	// echoing JSON response
	echo json_encode($response);
}
?>