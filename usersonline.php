<?php function usersonline() { 
//adapted from wired.com
// First, we set some configuration variables. 
	$timeout = time() - 60; // number of seconds to keep users in database 
	// $dbhost = "localhost"; $dbuser = "root"; // fill in your MySQL username
	$time = time(); 
	$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4"; 
	// $dbpass = ""; // fill in your MySQL password 
	// $dbname = "usersonline"; // We make a connection to the database 
	$dbusername = "lantc";
	$dbpassword = "NkXHus3h!6V";
	// mysql_connect($dbhost,$dbuser,$dbpass); mysql_select_db($dbname);
	$pdo = new PDO($dsn, $dbusername, $dbpassword);
	// Insert some data 
	
	$query = mysql_query("INSERT INTO usersonline VALUES('$REMOTE_ADDR','$time')"); if (!$query) { die('Invalid query: ' . mysql_error()); } // Delete older data 

	mysql_query("DELETE FROM usersonline WHERE whenn < $timeout"); if (!$query) { die('Invalid query: ' . mysql_error()); } // Count up the entries 

	$uniqueusers = mysql_query("SELECT DISTINCT who FROM usersonline"); if (!$uniqueusers) { die('Invalid query: ' . mysql_error()); } $usersonline = mysql_num_rows($uniqueusers); // And close the database connection. 
	mysql_close(); return $usersonline; } 

?>






<?php function usersonline() { // First, we set some configuration variables. 
	$timeout = time() - 60; // number of seconds to keep users in database
	 $dbhost = "localhost"; 
	 $dbuser = "root"; // fill in your MySQL username 
	 $dbpass = ""; // fill in your MySQL password 
	 $dbname = "usersonline"; // We make a connection to the database 
	 mysql_connect($dbhost,$dbuser,$dbpass); mysql_select_db($dbname); // Insert some data $time = time(); 
	 $query = mysql_query("INSERT INTO usersonline VALUES('$REMOTE_ADDR','$time')"); if (!$query) { die('Invalid query: ' . mysql_error()); } // Delete older data 
	 mysql_query("DELETE FROM usersonline WHERE whenn < $timeout"); if (!$query) { die('Invalid query: ' . mysql_error()); } // Count up the entries 
	 $uniqueusers = mysql_query("SELECT DISTINCT who FROM usersonline"); if (!$uniqueusers) { die('Invalid query: ' . mysql_error()); } $usersonline = mysql_num_rows($uniqueusers); // And close the database connection. 
	 mysql_close(); return $usersonline; } ?>