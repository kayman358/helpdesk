<?php include_once("head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>

<?php // QUERY USED TO INSERT BOTH THE FORMS AND THE IMAGES
	//Update welcome page title and body
if(isset($_POST['subsupport'])){
	//Form has been submitted
		//initialize an array to hold our errors
		$errors = array();
		
		//perform validation on the form
	$required_fields = array('username', 'department', 'keyword', 'brief_explanation' );
	$errors =  array_merge($errors, check_required_fields($required_fields));
	
	$username=htmlentities(trim(mysql_prep($_POST['username'])));
	$department=htmlentities(trim(mysql_prep($_POST['department'])));
	$keyword=htmlentities(trim(mysql_prep($_POST['keyword'])));
	$brief_explanation=nl2br($_POST['brief_explanation']);
		
	//Send an email 
	$emailID = "@lasuth.com.ng, @lasuth.com.ng";
        $subject = "Enquiry from. $username . through IT SUPPORT";
		$body = "Dear Support Team, a user with the username. $username . from the department of. $department . just submitted a request for 			        service concerning his/her. $keyword . issue as stated below ";
    
	}
?>
