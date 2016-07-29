<?php

/* **
 *  Create a new user to USER_ACCOUNT_TABLE.
 */

// array for JSON response
$response = array();

// check for required fields
if (!isset($_POST['test_type'])){
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "test_type is missing";
	
	// echoing JSON response
	echo json_encode($response);
} else if (!isset($_POST['result'])){
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "result is missing";
	
	// echoing JSON response
	echo json_encode($response);
} else if (!isset($_POST['battery_type'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "battery_type is missing";
	
	// echoing JSON response
	echo json_encode($response);	
} else if (!isset($_POST['battery_model_num'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "battery_model_num is missing";
	
	// echoing JSON response
	echo json_encode($response);	
} else if (!isset($_POST['set_capacity'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "set_capacity is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['measure'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "measure is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['rating'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "rating is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['soh'])){
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "soh is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['soc'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "soc is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['soc_voltage'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "soc_voltage is missing";
	
	// echoing JSON response
	echo json_encode($response);	
} else if (!isset($_POST['crnaking_volt'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "crnaking_volt is missing";
	
	// echoing JSON response
	echo json_encode($response);		
} else if (!isset($_POST['crnaking_high_low'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "crnaking_high_low is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['alt_idle_volt'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "alt_idle_volt is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['alt_idle_high_low'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "alt_idle_high_low is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['load_ripple_volt'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "load_ripple_volt is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['load_ripple_high_low'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "load_ripple_high_low is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['alt_load_volt'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "alt_load_volt is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['alt_load_high_low'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "alt_load_high_low is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['v_category'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "v_category is missing";
	
	// echoing JSON response
	echo json_encode($response);				
} else if (!isset($_POST['test_name'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "test_name is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['test_time'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "test_time is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['tester_name'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "tester_name is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['test_account'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "test_account is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['no_load_ripple_volt'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "no_load_ripple_volt is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['no_load_ripple_high_low'])){ 
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "no_load_ripple_high_low is missing";
	
	// echoing JSON response
	echo json_encode($response);			
} else if (!isset($_POST['ir_value'])){
	// required field is missing
	$response["success"] = 0;
	$response["message"] = "ir_value is missing";
	
	// echoing JSON response
	echo json_encode($response);	
} else
{	
	// get values
	$test_type= $_POST['test_type'];
	$result= $_POST['result'];
	$battery_type= $_POST['battery_type'];
	$battery_model_num= $_POST['battery_model_num'];
	$set_capacity= $_POST['set_capacity'];
	$measure= $_POST['measure'];
	$rating= $_POST['rating'];
	$soh= $_POST['soh'];
	$soc= $_POST['soc'];
	
	$soc_voltage= $_POST['soc_voltage'];
	$crnaking_volt= $_POST['crnaking_volt'];
	$crnaking_high_low= $_POST['crnaking_high_low'];
	$alt_idle_volt= $_POST['alt_idle_volt'];
	$alt_idle_high_low= $_POST['alt_idle_high_low'];
	$load_ripple_volt= $_POST['load_ripple_volt'];
	$load_ripple_high_low= $_POST['load_ripple_high_low'];
	$alt_load_volt= $_POST['alt_load_volt'];
	$alt_load_high_low= $_POST['alt_load_high_low'];
	$v_category= $_POST['v_category'];
	
	$test_name= $_POST['test_name'];
	$test_time= $_POST['test_time'];
	$tester_name= $_POST['tester_name'];
	$test_account= $_POST['test_account'];
	$no_load_ripple_volt= $_POST['no_load_ripple_volt'];
	$no_load_ripple_high_low= $_POST['no_load_ripple_high_low'];
	$ir_value= $_POST['ir_value'];
	
	// include db connect class
	require_once __DIR__ . '/db_connect.php';
	
	// connecting to db
	$db = new DB_CONNECT();
	
	// create data to user account table
	$sql = "INSERT INTO TEST_RECORD_TABLE (
					test_type, 
					result, 
					battery_type, 
					battery_model_num, 
					set_capacity, 
					measure, 
					rating, 
					soh, 
					soc, 
					
					soc_voltage, 
					crnaking_volt, 
					crnaking_high_low, 
					alt_idle_volt, 
					alt_idle_high_low, 
					load_ripple_volt, 
					load_ripple_high_low, 
					alt_load_volt, 
					alt_load_high_low, 
					v_category, 
					
					test_name, 
					test_time, 
					tester_name, 
					test_account, 
					no_load_ripple_volt, 
					no_load_ripple_high_low, 
					ir_value)
					
					values (			
					'$test_type', 
					'$result', 
					'$battery_type', 
					'$battery_model_num', 
					'$set_capacity', 
					'$measure', 
					'$rating', 
					'$soh', 
					'$soc', 
					
					'$soc_voltage', 
					'$crnaking_volt', 
					'$crnaking_high_low', 
					'$alt_idle_volt', 
					'$alt_idle_high_low', 
					'$load_ripple_volt', 
					'$load_ripple_high_low', 
					'$alt_load_volt', 
					'$alt_load_high_low', 
					'$v_category', 
					
					'$test_name', 
					'$test_time', 
					'$tester_name', 
					'$test_account', 
					'$no_load_ripple_volt', 
					'$no_load_ripple_high_low', 
					'$ir_value')";
	$result = mysql_query($sql) or die(mysql_error());
	
	// check if row inserted or not
	if ($result) {
		// successfully insert
		$response["success"] = 1;
		$response["message"] = "Successfully create a new record.";
		
		// echoing JSON response
		echo json_encode($response);
	}	else {
		// result is null
		$response["success"] = 0;
		$response["message"] = "result = null";
		
		// echoing JSON response
		echo json_encode($response);
	}
}
?>