<?php

/* **
 *  Search a user's email address in USER_ACCOUNT_TABLE.
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
	
	// search a user in user table
	$sql = "SELECT * FROM USER_ACCOUNT_TABLE WHERE email_address = '$email_address'";
	$result = mysql_query($sql) or die(mysql_error());
	
	// check if row inserted or not
	if ($result) {		
		// check if row is empty
		if(mysql_num_rows($result)>0) {
			// data node
			$response["data"] = array();
			
			while ($row = mysql_fetch_array($result)) {
        // temp user array
        $data = array();
        $data["user_id"] = $row["user_id"];
        $data["store_user_name"] = $row["store_user_name"];
        $data["store_user_address"] = $row["store_user_address"];
        $data["email_address"] = $row["email_address"];
        $data["phone_number"] = $row["phone_number"];

        // push single data into final response array
        array_push($response["data"], $data);
    	}
	    // success
	    $response["success"] = 1;
		} else {
			$response["success"] = 0;
			$response["message"] = "no users found.";
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
