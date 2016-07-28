<?php
    //$dbhost = '127.0.0.1';
    //$dbuser = 'root';
    //$dbpass = '';
    //$dbname = 'datatest';
    //$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
    // include db connect class
    require_once __DIR__ . '/db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

    //mysql_query("SET NAMES 'utf8'");
    //mysql_select_db($dbname);
    
    $sql = "SELECT * FROM `user`;";
    $result = mysql_query($sql) or die('MySQL query error');
    
    
    echo "Hello, USER Table:<br>";
    echo "<table border='1'>
		<tr>
		<th>userID</th>
		<th>Email</th>
		</tr>";    
    
    while($row = mysql_fetch_array($result)){
    		echo "<tr>";
				echo "<td>" . $row['userID'] . "</td>";
				echo "<td>" . $row['Email'] . "</td>";
				echo "</tr>";
    	
        /*echo $row['userID'];
        echo ' ';
        echo $row['Email'];
        echo '<br>';*/
    }
    echo "</table>";
?>
