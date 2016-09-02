<?php include_once("head.php") ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>

<html>
<link rel="stylesheet" type="text/css" href="css/style.css" />



<title>Admin</title>

<script type="text/javascript">
		function checkradio(){
			var flag = 1;
		var radio = (document.form1.rdb);
		for (var i in radio){
			if (radio[i].checked){
				flag = 0;
			}
			}
		
		if(flag == 1){
			alert("Please select an option");
			return false;
		}else if(!(resolved == false && pending == false && notresoved == false)){
		return true;
		}
	}
</script>


<body>
<form method="post" name = "form1" class="advertis" action="administrator.php" id = "myform" onSubmit="return checkradio()">
<table border="0" cellpadding="3" cellspacing="4" bordercolorlight="#0000FF">
<tr>
  <td width="194" height="44"><label><span class="contact1">Please input your Ticket Number:</span></label></td>
<td width="289"><input type="text" size="50" name="ticket_no" id="ticket" value="" class="cok" /><br /><br/></td></tr>
  <tr>
  <td width="194" height="44"><label><span class="contact1">Please choose the applicable to your ticket:</span></label></td>
  <td>
<input name="rdb" type="radio" id="resolved"  value="Resolved"/><label><span class="contact2">Resolved</span></label>
<p>
<input name="rdb" type="radio" id="pending"  value="Pending"/><label><span class="contact2">Pending</span></label></p>
<p>
<input name="rdb" type="radio" id="notresolved"  value="NotResolved"/><label><span class="contact2">Not Resolved</span></label></p>
</td>


</tr>
<tr> <td width="194"></td>
<td> <input type="submit" class="btn btn-success" name="substat" value="Submit" /></td></tr>
</table>
</form>
<?php
 
if(isset($_POST["substat"])){
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
		if($result){
			
		$rdb_value = $_POST['rdb'];
	if ($rdb_value=='Resolved'){
	$message = "<i><span style=color:#ff0000><h3>Thanks for contacting ICT support services. Your issue with ticket number $ticket has been successfully resolved.</h3></span></i><br />";
	}elseif($rdb_value=='Pending'){
		$message = "<i><span style=color:#ff0000><h3>Thanks for contacting ICT support services. Your issue with ticket number $ticket is still being attended to.</h3></span></i><br />";
	}
		elseif($rdb_value=='NotResolved') {
		$message = "<i><span style=color:#ff0000><h3>Issue cannot be resolved now for certain reasons please bear with us.</h3></span></i><br />";
		}
		else {
			$message = "<i><span style=color:#ff0000><h3>Please Select an Option</h3></span></i><br />";
		}
	echo $message;
	$query="UPDATE call_log SET status = '$rdb_value' where ticket_no = '{$ticket}'";
		$result = mysql_query($query, $connection);
        confirm_query($result);
		if($result){
			
		$message = "";
	}
		
	}

}else{ $message = "<i><span style=color:#ff0000><h3>The Ticket Number is Invalid</h3></span></i><br />";
echo $message;

}
}
	

	}
		
	




?>
</body>
</html>
<?php require_once("footer.php"); ?>
