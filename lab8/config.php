<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_HOST','localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'contact');
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
// Check connection
if(!$conn){
  die("failed to connect".mysqli_connect_error()); 
}else
{
    // echo 'connected';
}
?>