<?php
//Database connection.
$con = MySQLi_connect(
   "localhost", //Server host name.
   "root", //Database username.
   "xXdBLnejWq3h9s", //Database password.
   "mapApp" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>
