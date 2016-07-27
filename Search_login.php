<?php

/* **
 *  Search a user in MySQL, and then return true(1) or false(0).
 *  
 *  by Ian
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['Email'])){
	
	// get values
	$email = $_POST['Email'];
	
	// include db connect class
	require_once __DIR__ . '/db_connect.php';
	
	// connecting to db
	$db = new DB_CONNECT();
	
	// search a uset in user table
	$sql = "SELECT * FROM user WHERE Email = '$email'";
	$result = mysql_query($sql) or die(mysql_error());
	
	// check if row inserted or not
	if ($result) {
		// check if row is empty
		if(mysql_num_rows($result) == 1) {
			$response["success"] = 1;
			$response["message"] = "This user is already registered.";
		} else if(mysql_num_rows($result) == 0) {
			$response["success"] = 0;
			$response["message"] = "This user is not registered.";
		} else {
			$response["success"] = 0;
			$response["message"] = "Duplicate registration!!";
		}	
		
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