<?php require_once("head.php"); ?>

<html>
<head>
<title>Register</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <form method="post" class="advertis" action="vendors.php">
  <i><span style=color:#ff0000><h1>REGISTER TO ENJOY MORE OF OUR SERVICES</h1></span></i><br />
    <?php if(isset($message)){echo '<h4>'.$message.'</h4>';}  ?>
  <table border="0" cellpadding="3" cellspacing="4" bordercolorlight="#0000FF">
  <tr>
  <td width="180"><label><span class="contact1">Username:</span></label></td>
<td><input type="text" size="50" name="username" value="" class="cok" /><br /><br/></td></tr>
 <tr>
<td width="200"> <label><span class="contact1">Password</span>:</label></td>
<td><input type="password" size="50" name="password" value=""  class="cok"/><br /><br /></td></tr>
<tr>
<td width="180"> <label><span class="contact1">Confirm Password:</span></label></td>
<td><input type="password" size="50" name="confirm_pass" class="cok"/><br /><br /></td></tr>  
<tr>
<td width="200"> <label><span class="contact1">Department:</span></label></td>
<td><select name="department" class="cok">
<option>Medical</option>
<option>Surgical</option>
<option>Pharmacy</option>
<option>ENT</option>
<option>Optical</option>
<option>NHIS</option>
<option>MRC</option>
<option selected="selected">--choose--</option>
</select><br /><br /></td></tr> 
<tr>        
<td width="200"> <label><span class="contact1">Security Question:</span></label></td>
<td><select name="security_question" class="cok">
<option>What is the name of your first school</option>
<option>What is the name of your favorite uncle</option>
<option>What is the name of your first daughter</option>
<option>What is the name of your car</option>
<option>What is the name of your favorite designer</option>
<option>What is the name of your wife</option>
<option>What is the name of your husband</option>
<option selected="selected">--choose--</option>
</select><br /><br /></td></tr>    
<tr>
<td width="180"> <label><span class="contact1">Answer:</span></label></td>
<td><input type="text" size="50" name="answer" class="cok"/><br /><br /></td></tr>       
<tr>
<td width="180"> <label><span class="contact1">Phone No:</span></label></td>
<td><input type="text" size="50" name="phone_no" class="cok"/><br /><br /></td></tr>
       
<tr> <td width="180"></td>
<td> <input type="submit" name="submitadvertise" value="Submit"/></td></tr>
                            </table>


					</form>


</body>
<?php require_once("footer.php"); ?>
</html>