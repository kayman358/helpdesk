<?php
require("constants.php");

//creating a db connection
$connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$connection) {
	die("Database connection failed:" . mysql_error());
}

//selecting a db
$db_select=mysql_select_db(DB_NAME,$connection);
if(!$db_select){
 die("Database selection failed: " . mysql_error());
}
?>