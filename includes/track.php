<?php
if(isset($_POST['submitLogin'])){
	
	//Form has been submitted
		//initialize an array to hold our errors
		$errors = array();
		
		//perform validation on the form
	$required_fields = array('email', 'password' );
	$errors =  array_merge($errors, check_required_fields($required_fields));
	
		
	
	$email=htmlentities(trim(mysql_prep($_POST['email'])));
	$password= trim(strip_tags($_POST['password']));
	$hashed_password= sha1($password);
		
	//Database submission only proceeds if there were NO errors
		if (empty($errors)){
		global $connection;	
		$query="SELECT email, hashed_password FROM user WHERE email = '{$email}' AND hashed_password='{$hashed_password}' LIMIT 1";
		$result_set = mysql_query($query);
        confirm_query($result_set);
		//test to see if the update occured
		if(mysql_num_rows($result_set) ==1){
			//success
			$found_user = mysql_fetch_array($result_set);
			$_SESSION['email'] = $found_user['email'];
			
			redirect_to('catalog.php');
			}else{
				//failed
			$message = "Please review login combination. ";
			$message .= "<br />" . mysql_error();
			}
			
		}else{
			//Errors occured
			if(count($errors) == 1){
				$message = "There was 1 error in the form.";
			}else{
		$message = "There were " . count($errors). " errors in the form";
				}
			}
	
	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LASUTH ICT CALL LOGGER</title>
</head>

<body>
</body>
</html>