<?php require_once("head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>



<html>
<head>

<title>Login</title>
</head>

<body>

<?php
if(isset($_POST['submitLogin'])){
	redirect_to('log.php');
			}
			?>
/*	
	//Form has been submitted
		//initialize an array to hold our errors
		$errors = array();
		
		//perform validation on the form
	$required_fields = array('username', 'password');
	$errors =  array_merge($errors, check_required_fields($required_fields));
	
		
	
	$username=htmlentities(trim(mysql_prep($_POST['username'])));
	$password= trim(strip_tags($_POST['password']));
	$hashed_password= sha1($password);
		
	//Database submission only proceeds if there were NO errors
		if (empty($errors)){
		global $connection;	
		$query="SELECT username, hashed_password FROM users WHERE username = '{$username}' AND hashed_password='{$hashed_password}' LIMIT 1";
		$result_set = mysql_query($query);
		
		
		
        confirm_query($result_set);
		
		//test to see if the update occured
		if((mysql_num_rows($result_set) )){
			//success
			$found_user = mysql_fetch_array($result_set);
			$_SESSION['username'] = $found_user['username'];
			
			redirect_to('log.php');
			}else{
			
				//failed
				
			$message = '<i><span style=color:#ff0000><h3>Please review login combination. <br /></h3></span></i>';
			$message .= "<br />" . mysql_error();
			echo $message;
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
<form method="post" class="advertis" action="Login.php">
<table border="0" cellpadding="3" cellspacing="4" bordercolorlight="#0000FF">
  <tr>
  <td width="100"><label><span class="contact1">Username:</span></label></td>
<td><input type="text" size="50" name="username" placeholder= "username" value="" class="cok" /><br /><br/></td></tr>
 <tr>
<td width="100"> <label><span class="contact1">Password:</span></label></td>
<td><input type="password" size="50" name="password"  placeholder= "password" value=""  class="cok"/><br /><br /></td></tr>
<tr>
<td> <input type="submit" name="submitLogin" value="Submit"/></td></tr>



                            </table>
</form>

 */
</body>
<?php require_once("footer.php"); ?>

</html>