<?php require_once("head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>
<title>Show Logged Calls</title>

<br />
<br />
<br />
<br />
<br />
<?php
if(isset($_POST['submitLogin'])){
	$errors = array();
	
	$required_fields = array('username', 'password');
	$errors =  array_merge($errors, check_required_fields($required_fields));

	$username=htmlentities(trim(mysql_prep($_POST['username'])));
	$password=htmlentities(trim(mysql_prep($_POST['password'])));
if (empty($errors)&&$username=="admin"&&$password=="admin"){
		global $connection;	
		
	$query="SELECT * from call_log WHERE date = DATE(NOW())";
		$result = mysql_query($query, $connection);
        confirm_query($result);
		if((mysql_num_rows($result) )){
		//$row = mysql_fetch_array($result);
		if($result){
			while($row = mysql_fetch_array($result)){
					$message =  "STATUS: ".$row['status']." | "."USERNAME: ".$row['username']." | "."DEPARTMENT: ".$row['department']." | "."BRIEF EXPLANATION: ".$row['brief_explanation'];
			echo  "<p><pre>". $message ."</pre></p><br /><br />";
		
	
}
		
		
	}
		}
	
	
}

else{
	echo "Incorrect Credentials";
	 }

}
?>

<?php require_once("footer.php"); ?>