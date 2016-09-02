<?php require_once("head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>
<title>Check Status</title>
<script type="text/javascript">
    function checkradio(){
		var chkf = document.getElementById("ticket_no").value;
		if(chkf.length==0){
			alert("Please fill in the Ticket Number");
			document.getElementById("ticket_no").style.borderColor="red";
			return false;
		}else{
		return true;
		}
	}
</script>

<form method="post" class="advertis" action="ticket.php" id = "myform" onsubmit="return checkradio ();">
<table border="0" cellpadding="3" cellspacing="4" bordercolorlight="#0000FF">
<tr>
  <td width="194" height="44"><label><span class="contact1">Please input your Ticket Number:</span></label></td>
<td width="289"><input type="text" size="50" id = "ticket_no" name="ticket_no" value="" class="cok" /><br /><br/></td></tr>

<tr> <td width="194"></td>
<td> <input type="submit" class="btn btn-success"   name="substatis" value="Submit"/></td></tr>
</table>
</form>
<br /> <br />

<?php if(isset($_POST["substatis"])){
	$errors = array();
	
	$required_fields = array('ticket_no');
	$errors =  array_merge($errors, check_required_fields($required_fields));
	
	$ticket=htmlentities(trim(mysql_prep($_POST['ticket_no'])));
if (empty($errors)){
		global $connection;	
		
	$query="SELECT status from call_log WHERE ticket_no = '{$ticket}' LIMIT 1";
		$result = mysql_query($query, $connection);
        confirm_query($result);
		if((mysql_num_rows($result) )){
		$row = mysql_fetch_array($result);
		$message = "<i><span style=color:#ff0000><h3>The ticket no $ticket is currently ".$row['status']."</h3></span></i><br />";
		if($result){
			
		echo $message;
		
	}

}else{ $message = "<i><span style=color:#ff0000><h3>The Ticket Number is Invalid</h3></span></i><br />";
echo $message;

}
}




}
?>
<?php require_once("footer.php"); ?>
