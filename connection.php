<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'u-200029364' with password) */
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'u-200029364');
define('DB_PASSWORD', 'UT3ORFt5SK4q7j3');
define('DB_NAME', 'u_200029364_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
