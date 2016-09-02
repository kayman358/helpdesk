<?php require_once("head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logs Admin</title>
</head>

<body>
<?php

if(isset($_POST['submitLogin'])){
	$username=htmlentities(trim(mysql_prep($_POST['username'])));
	$password=htmlentities(trim(mysql_prep($_POST['password'])));
if (empty($errors)&&$username=="admin"&&$password=="admin"){?>
<form method="post" class="advertis" action="show.php">
<table border="0" cellpadding="3" cellspacing="4" bordercolorlight="#0000FF">
  <tr>
  <td width="100"><label><span class="contact1">Username:</span></label></td>
<td><input type="text" size="50" name="username" placeholder= "username" value="" class="cok" /><br /><br/></td></tr>
 <tr>
<td width="100"> <label><span class="contact1">Password:</span></label></td>
<td><input type="password" size="50" name="password"  placeholder= "password" value=""  class="cok"/><br /><br /></td></tr>
<tr>
<td> <input type="submit" class="btn btn-primary" name="submitLogin" value="Submit"/></td></tr>



                            </table>
</form>

<?php
} 
else {
	 echo "Incorrect Credentials";
}
}
?>
</body>
<?php require_once("footer.php"); ?>
</html>