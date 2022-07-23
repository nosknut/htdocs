<?php
$database = 'sql11224243';
$username = 'sql11224243';
$password = '';
$hostname = 'sql11.freesqldatabase.com';
 
$link = mysql_connect($hostname, $username, $password);
if (!$link) {
    die('Not connected : ' . mysql_error());
}
 
// make foo the current db
$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
    die ('Can\'t connect : ' . mysql_error());
}
 
// if you've got this far, the database connection has been made
echo "<p>You have successfully connected to $database</p>";
 
// quick script to display all the tables in your database
// run the mysql query and check the result
$result = mysql_query('SELECT * FROM Traverskran');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
 
// loop through the result and display
echo "<p>Tables within in $database</p>";
	while ($row = mysql_fetch_array($result)) {
	    echo $row[0] . ' : ' . $row[1] . '<br>';
	}
?>