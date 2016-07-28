<?php

/* **
 *  Create a new user in MySQL.
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['userID']) && isset($_POST['Email'])){
	
	// get values
	$userid = $_POST['userID'];
	$email = $_POST['Email'];
	
	// include db connect class
	require_once __DIR__ . '/db_connect.php';
	
	// connecting to db
	$db = new DB_CONNECT();
	
	// create data to user table
	$sql = "INSERT INTO user (userID, Email) VALUES ('$userid', '$email')";
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