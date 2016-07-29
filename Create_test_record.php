<?php

/* **
 *  Create a new user to USER_ACCOUNT_TABLE.
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['test_type']) && 
		isset($_POST['result']) && 
		isset($_POST['battery_type']) && 
		isset($_POST['battery_model_num']) && 
		isset($_POST['set_capacity']) && 
		isset($_POST['measure']) && 
		isset($_POST['rating']) && 
		isset($_POST['soh']) && 
		isset($_POST['soc']) && 
		
		isset($_POST['soc_voltage']) && 
		isset($_POST['crnaking_volt']) && 
		isset($_POST['crnaking_high_low']) && 
		isset($_POST['alt_idle_volt']) && 
		isset($_POST['alt_idle_high_low']) && 
		isset($_POST['load_ripple_volt']) && 
		isset($_POST['load_ripple_high_low']) && 
		isset($_POST['alt_load_volt']) && 
		isset($_POST['alt_load_high_low']) && 
		isset($_POST['v_category']) && 
		
		isset($_POST['test_name']) && 
		isset($_POST['test_time']) && 
		isset($_POST['tester_name']) && 
		isset($_POST['test_account']) && 
		isset($_POST['no_load_ripple_volt']) && 
		isset($_POST['no_load_ripple_high_low']) && 
		isset($_POST['ir_value']))
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