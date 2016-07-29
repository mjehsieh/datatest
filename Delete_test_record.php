<?php

/* **
 *  Delete a new record to TEST_RECORD_TABLE.
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['record_id']))
{	
	// get values
	$record_id = $_POST['record_id'];
	
	// include db connect class
	require_once __DIR__ . '/db_connect.php';
	
	// connecting to db
	$db = new DB_CONNECT();
	
	// delete data from test record table
	$sql = "delete from TEST_RECORD_TABLE where record_id = '$record_id'";
	$result = mysql_query($sql) or die(mysql_error());
	
	// check if row delete or not
	if ($result) {
		// successfully delete
		$response["success"] = 1;
		$response["message"] = "Successfully delete a record.";
		
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