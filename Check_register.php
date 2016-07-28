<?php

/* **
 *  Check user's email address in USER_ACCOUNT_TABLE, return 1 (registered) or 0 (non registered).
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['email_address'])){
	
	// get values
	$email_address = $_POST['email_address'];
	
	// include db connect class
	require_once __DIR__ . '/db_connect.php';
	
	// connecting to db
	$db = new DB_CONNECT();
	
	// search a uset in user table
	$sql = "SELECT * FROM USER_ACCOUNT_TABLE WHERE email_address = '$email_address'";
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
			$response["success"] = -1;
			$response["message"] = "Duplicate registration!!";
		}	
		
		// echoing JSON response
		echo json_encode($response);
	}	else {
		// result is null
		$response["success"] = -1;
		$response["message"] = "result = null";
		
		// echoing JSON response
		echo json_encode($response);
	}
} else {
	// required field is missing
	$response["success"] = -1;
	$response["message"] = "Required field(s) is missing";
	
	// echoing JSON response
	echo json_encode($response);
}
?>
