<?php include_once("head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>






<?php // QUERY USED TO INSERT BOTH THE FORMS AND THE IMAGES
	//Update welcome page title and body
if(isset($_POST['submitadvertise'])){
	//Form has been submitted
		//initialize an array to hold our errors
		$errors = array();
		
		
		//perform validation on the form
	$required_fields = array('username', 'password', 'department', 'confirm_pass', 'phone_no');
	$errors =  array_merge($errors, check_required_fields($required_fields));
	
	$username=htmlentities(trim(mysql_prep($_POST['username'])));
	$password=htmlentities(trim(mysql_prep($_POST['password'])));
	$department=htmlentities(trim(mysql_prep($_POST['department'])));
	$confirm_pass=htmlentities(trim(mysql_prep($_POST['confirm_pass'])));
	$security_question=htmlentities(trim(mysql_prep($_POST['security_question'])));
	$answer=htmlentities(trim(mysql_prep($_POST['answer'])));
	$phone_no=htmlentities(trim(mysql_prep($_POST['phone_no'])));
	$hashed_password= sha1($password);
	
	//check if user already exist
	$check = "Select * from users WHERE username='$_POST[username]'";
		$res = mysql_query($check, $connection);
		confirm_query($res);
		if (mysql_num_rows($res) > 0) {
    $message1 = '<i><span style=color:#ff0000><h3>User Already Exists<br /></h3></span></i>';
	   echo '<h3>'.$message1.'</h3>'; 
}else{


	//Database submission only proceeds if there were NO errors
				if (($_POST['password'])==($_POST['confirm_pass'])&&(empty($errors))){

		global $connection;	
		$query="INSERT INTO users SET username= '{$username}', password= '{$password}', department= '{$department}',confirm_pass='{$confirm_pass}',security_question= '{$security_question}', answer= '{$answer}', phone_no='{$phone_no}', hashed_password='{$hashed_password}' ";
		$result = mysql_query($query, $connection);
        confirm_query($result);
		//test to see if the update occured
		if($result){
		$message = '<i><span style=color:#ff0000><h4>You have successfully registered as a user of ICT online call logging scheme<br /> You can now login and enjoy our services</h4></span></i>';
			}else{
				//failed
			$message = "Submission of form failed fail";
			$message .= "<br />" . mysql_error();
				}
		}else{
			//Errors occured
			if(count($errors) == 1){
				$message = "<h3><i><span style=color:#ff0000>There was 1 error in the form.</span></i></h3>";
			}elseif(count($errors) > 1){
					$message = "<h3><i><span style=color:#ff0000>There were " . count($errors). " errors in the form</span></i></h3>";
				
			}else{
		$message = "<i><span style=color:#ff0000><h3>Oops!!! You might have filled this form incorrectly, check your password fields if they match <br /> </h3></span></i>";
				}
			}
}
}

?>


        
        <div id="section">
          <div class="welcome">
            <i><span style=color:#ff0000><h1>ICT REGISTRATION PAGE</h1></span></i>            
           <form method="post" class="advertis" action="vendors.php">
  <i><span style=color:#ff0000><h1>REGISTER TODAY TO ENJOY MORE OF OUR SERVICES</h1></span></i><br />
    <?php if(isset($message)){echo '<h4>'.$message.'</h4>';}  ?>

  
 

					</form>

<?php require_once("login.php");?>
            
            
          </div><!---welcome-->
        
        </div><!--section-->
        <div class="clear"></div>
     
    </div><!--wrapper-->  
</body>
</html>
