<?php
    // include db connect class
		require_once __DIR__ . '/db_connect.php';
		
		// connecting to db
		$db = new DB_CONNECT();
		
    $sql = "SELECT * FROM `USER_ACCOUNT_TABLE`;";
    $result = mysql_query($sql) or die('MySQL query error');
    
    
    echo "gitlab deploy test!<br>";
    echo "User Account Table:<br>";
    echo "<table border='1'>
		<tr>
		<th>user_id</th>
		<th>store_user_name</th>
		<th>store_user_address</th>
		<th>email_address</th>
		<th>phone_number</th>
		</tr>";    
    
    while($row = mysql_fetch_array($result)){
    		echo "<tr>";
				echo "<td>" . $row['user_id'] . "</td>";
				echo "<td>" . $row['store_user_name'] . "</td>";
				echo "<td>" . $row['store_user_address'] . "</td>";
				echo "<td>" . $row['email_address'] . "</td>";
				echo "<td>" . $row['phone_number'] . "</td>";
    }
    echo "</table>";
    
    
    $sql = "SELECT * FROM `TEST_RECORD_TABLE`;";
    $result = mysql_query($sql) or die('MySQL query error');
    
    echo "<br><br>";
    echo "Test record table:<br>";
    echo "<table border='1'>
		<tr>
	 		
		<th>record_id</th>
		<th>test_type</th>
		<th>result</th>
		<th>battery_type</th>
		<th>battery_model_num</th>
		<th>set_capacity</th>
		<th>measure</th>
		<th>rating</th>
		<th>soh</th>
		<th>soc</th>
		
		<th>soc_voltage</th>
		<th>crnaking_volt</th>
		<th>crnaking_high_low</th>
		<th>alt_idle_volt</th>
		<th>alt_idle_high_low</th>
		<th>load_ripple_volt</th>
		<th>load_ripple_high_low</th>
		<th>alt_load_volt</th>
		<th>alt_load_high_low</th>
		<th>v_category</th>
		
		<th>test_name</th>
		<th>test_time</th>
		<th>tester_name</th>
		<th>test_account</th>
		<th>no_load_ripple_volt</th>
		<th>no_load_ripple_high_low</th>
		<th>ir_value</th>
		
		</tr>"; 
    
    while($row = mysql_fetch_array($result)){
    		echo "<tr>";
				echo "<td>" . $row['record_id'] . "</td>";
				echo "<td>" . $row['test_type'] . "</td>";
				echo "<td>" . $row['result'] . "</td>";
				echo "<td>" . $row['battery_type'] . "</td>";
				echo "<td>" . $row['battery_model_num'] . "</td>";
				echo "<td>" . $row['set_capacity'] . "</td>";
				echo "<td>" . $row['measure'] . "</td>";
				echo "<td>" . $row['rating'] . "</td>";
				echo "<td>" . $row['soh'] . "</td>";
				echo "<td>" . $row['soc'] . "</td>";
				
				echo "<td>" . $row['soc_voltage'] . "</td>";
				echo "<td>" . $row['crnaking_volt'] . "</td>";
				echo "<td>" . $row['crnaking_high_low'] . "</td>";
				echo "<td>" . $row['alt_idle_volt'] . "</td>";
				echo "<td>" . $row['alt_idle_high_low'] . "</td>";
				echo "<td>" . $row['load_ripple_volt'] . "</td>";
				echo "<td>" . $row['load_ripple_high_low'] . "</td>";
				echo "<td>" . $row['alt_load_volt'] . "</td>";
				echo "<td>" . $row['alt_load_high_low'] . "</td>";
				echo "<td>" . $row['v_category'] . "</td>";
				
				echo "<td>" . $row['test_name'] . "</td>";
				echo "<td>" . $row['test_time'] . "</td>";
				echo "<td>" . $row['tester_name'] . "</td>";
				echo "<td>" . $row['test_account'] . "</td>";
				echo "<td>" . $row['no_load_ripple_volt'] . "</td>";
				echo "<td>" . $row['no_load_ripple_high_low'] . "</td>";
				echo "<td>" . $row['ir_value'] . "</td>";
    }
    echo "</table>";
?>
