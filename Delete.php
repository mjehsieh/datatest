<?php

/* **
 *  Delete a new user to USER_ACCOUNT_TABLE.
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['store_user_name']) &&	isset($_POST['email_address']))
{	
	// get values
	$store_user_name = $_POST['store_user_name'];
	$email_address = $_POST['email_address'];
	
	// include db connect class
	require_once __DIR__ . '/db_connect.php';
	
	// connecting to db
	$db = new DB_CONNECT();
	
	// original rows
	$sql = "select * from USER_ACCOUNT_TABLE";
	$origin = mysql_query($sql) or die(mysql_error()); 
	$ori_rows = mysql_num_rows($origin);
	
	// delete data from user account table
	$sql = "delete from USER_ACCOUNT_TABLE where store_user_name = '$store_user_name' and email_address = '$email_address'";
	$result = mysql_query($sql) or die(mysql_error());
	
	// result rows
	$sql = "select * from USER_ACCOUNT_TABLE";
	$result_r = mysql_query($sql) or die(mysql_error()); 
	$result_rows = mysql_num_rows($result_r);
	
	// check if row delete or not
	if ($result) {
		if($result_rows < $ori_rows){
			// successfully delete
			$response["success"] = 1;
			$response["message"] = "Successfully delete a user.";
		} else {
			// fail to delete
			$response["success"] = 0;
			$response["message"] = "Fail to delete a user.";
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