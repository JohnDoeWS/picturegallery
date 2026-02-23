<?php # Script for connect to database - mysqli_connect.php
// This file contains the database access information. 
// This file also establishes a connection to MySQL 
// and selects the database.


//local params for testing
//DEFINE ('DB_USER', 'root');
//DEFINE ('DB_PASSWORD', 'root');
//DEFINE ('DB_HOST', '127.0.0.1');

$db_user = getenv('DB_USER')
$db_password = getenv('DB_PASSWORD')
$db_host = getenv('DB_HOST')
  

// Set the database access information as constants:
DEFINE ('DB_USER', $db_user);
DEFINE ('DB_PASSWORD', $db_password);
DEFINE ('DB_HOST', $db_host);
DEFINE ('DB_NAME', 'picturegallery');



// Make the connection:
$connection = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($connection, 'utf8');

?>
