<?php

/* **
 * get all data from USER_ACCOUNT_TABLE.
 */

// array for JSON response
$response = array();


// include db connect class
require_once __DIR__ . '/db_connect.php';

// connecting to db
$db = new DB_CONNECT();

// get all users from user table
$sql = "SELECT * FROM `USER_ACCOUNT_TABLE`;";
$result = mysql_query($sql) or die(mysql_error());

// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
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

        // push data product into final response array
        array_push($response["data"], $data);
    }
    // success
    $response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";

    // echo no users JSON
    echo json_encode($response);
}
?>
