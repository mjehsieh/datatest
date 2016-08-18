<?php

/* **
 *  Create a new user to USER_ACCOUNT_TABLE.
 */

// array for JSON response
$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$data = json_decode(file_get_contents("php://input"));
	
	// check for required fields
	if (isset($data->store_user_name) && isset($data->store_user_address) && 
			isset($data->email_address) && isset($data->phone_number))
	{	
		// get values
		$store_user_name = $data->store_user_name;
		$store_user_address = $data->store_user_address;
		$email_address = $data->email_address;
		$phone_number = $data->phone_number;
		
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
}	


?>