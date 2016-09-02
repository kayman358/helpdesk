<?php require_once("head.php");?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>
<?php 
if(isset($_POST['submitpass'])){
$errors = array();
$required_fields=array('security_question', 'answer');
$errors=array_merge($errors, check_required_fields($required_fields));
$security_question=htmlentities(trim(mysql_prep($_POST['security_question'])));
$answer=htmlentities(trim(mysql_prep($_POST['answer'])));
if (empty($errors)){
		global $connection;	
		$query="SELECT password from users WHERE security_question = '{$security_question}' AND answer='{$answer}' LIMIT 1";
		$result_set = mysql_query($query);
		
		
		
        confirm_query($result_set);
		
		//test to see if the update occured
		if((mysql_num_rows($result_set) )){
			//success
			$found_user = mysql_fetch_array($result_set);
			echo "Your password is ".$found_user['password'];	
			}else{
			
				//failed
				
			$message = '<i><span style=color:#ff0000><h3>The answer to your question is wrong<br /></h3></span></i>';
			$message .= "<br />" . mysql_error();
			echo $message;
			}
			
}
}
?>
<?php require_once("footer.php");?>