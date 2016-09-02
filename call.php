<?php require_once("head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>

<?php // QUERY USED TO INSERT BOTH THE FORMS AND THE IMAGES
	//Update welcome page title and body
	$errors = array();
	$required_fields = array('brief_explanation', 'keyword', 'username');
	$errors =  array_merge($errors, check_required_fields($required_fields));
if(isset($_POST['subsupport'])&& empty($errors)){
	
		$errors = array();
	
	
	//Form has been submitted
		//initialize an array to hold our errors
	
		
		//perform validation on the form
	$required_fields = array('brief_explanation', 'keyword', 'username', 'checkboxes');
	//$errors =  array_merge($errors, check_required_fields($required_fields));
	
	$username=htmlentities(trim(mysql_prep($_POST['username'])));
	$department=htmlentities(trim(mysql_prep($_POST['department'])));
	$unit=htmlentities(trim(mysql_prep($_POST['unit'])));
		$number=htmlentities(trim(mysql_prep($_POST['number'])));
	$keyword=htmlentities(trim(mysql_prep($_POST['keyword'])));
	$brief_explanation=htmlspecialchars(trim(mysql_prep(nl2br($_POST['brief_explanation']))));
		 date_default_timezone_set('Africa/Lagos');
    $date = date('Y-m-d');
	$time = date('H:i:s');
	$check =implode(', ', $_POST['ch1']);
	if ($check == ""){
		$message = "There was an error in the form"; 
	}
	
	//Database submission only proceeds if there were NO errors
		if (empty($errors)){
		global $connection;	
		
		$query = "SELECT *
          FROM call_log
          WHERE date = DATE(NOW())";
$result = mysql_query($query, $connection);

confirm_query($result);
		if($result){
			

//Detemine the new ticket id component
if(mysql_num_rows($result)>=1)
{
 $row = mysql_num_rows($result);
    $ticketID = $row + 1;
}
else
{
   $ticketID = 1;
}
		}
$ticketDate = date('Y-m-d');
$newTicket =  "{$ticketDate}-{$ticketID}";
		$query="INSERT INTO call_log SET username= '{$username}', department = '{$department}', unit = '{$unit}', number ='{$number}', keyword = '{$keyword}', brief_explanation='{$brief_explanation}', date ='{$date}', time ='{$time}', ticket_no='{$newTicket}', checkboxes = '{$check}', status = 'pending'";
		$result = mysql_query($query, $connection);
        confirm_query($result);
		if($result){
			
		$message = "<i><span style=color:#ff0000><h3>Thanks for contacting ICT support services. Your ticket number is $newTicket, please keep it safe. We will solve the issue in a moment.</h3></span></i><br />";
		
		
		$emailID = "seun.ict@lasuth.org.ng, tjoshodi@lasuth.org.ng";
        $subject = "Enquiry from $username  through IT SUPPORT";
		$body = "Dear Support Team, \r\n \r\n A user with the username $username from the $department department just submitted a request for service concerning his/her $keyword issue with ticket number $newTicket as stated below: \r\n \r\n $brief_explanation \r\n \r\n Thanks in anticipation  \r\n Best Regards, \r\n $department Department";
     $headers = "From: noreply@lasuth.org.ng\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
        
        mail ($emailID, $subject, $body, $headers );
		
		
		
			}else{
				//failed
			$message = "Submission of form failed fail";
			$message .= "<br />" . mysql_error();
				}
		}else{
			//Errors occured
			if(count($errors) == 1){
				$message = "There was an error in the form.";
			}else{
		$message = "<h5>There were " . count($errors). " errors in the form</h5>";
				}
			}
			
		
     
        
	}
	 
	include_once("log.php"); 
	 
?>
