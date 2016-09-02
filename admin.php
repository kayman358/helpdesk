<?php require_once("head.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/track.php"); ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check Jobs</title>

</head>



<br />
<br />
<br />
<br />
<br />
<form method="post"  name = "form1" class="advertis" action="Logs.php" id = "myform" onSubmit="return checkradio()">
<table border="0"  cellpadding="3" cellspacing="4" bordercolorlight="#0000FF">
<tr>
  <td width="194" height="44"><label><span class="contact1">Username:</span></label></td>
<td width="289"><input type="text" size="50" name="username" id="ticket" value="" class="cok" /><br /><br/></td></tr>
  <tr>
  <td width="194" height="44"><label><span class="contact1">Password:</span></label></td>
  <td width="289"><input type="password" size="50" name="password" id="ticket" value="" class="cok" /><br /><br/></td></tr>
  <tr><td width="194"></td>
<td> <input type="submit" class="btn btn-primary"  name="submitLogin" value="Submit"/>
 <input name="reset" class="btn btn-primary" type="reset" value="Reset" />
</td>


</tr>
</table>
</form>
</html><br /><br />
<?php require_once("footer.php"); ?>