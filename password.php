<?php require_once("head.php");?>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<i><span style=color:#ff0000><h2>PLEASE SELECT YOUR SECURITY QUESTION TO RETRIEVE PASSWORD</h2></span></i><br />
 <form method="post" class="advertis" action="pass.php">
  <table border="0" cellpadding="3" cellspacing="4" bordercolorlight="#0000FF">
<tr>
<td width="200"> <label><span class="contact1">Security Question:</span></label></td>
<td><select name="security_question" class="cok">
<option>What is the name of your first school</option>
<option>What is the name of your favorite uncle</option>
<option>What is the name of your first daughter</option>
<option>What is the name of your first car</option>
<option>What is the name of your favorite designer</option>
<option>What is the name of your wife</option>
<option>What is the name of your husband</option>
<option selected="selected">--choose--</option>
</select><br /><br /></td></tr>    
<tr>
<td width="180"> <label><span class="contact1">Answer:</span></label></td>
<td><input type="text" size="50" name="answer" class="cok"/><br /><br /></td></tr>       
       
<tr> <td width="180"></td>
<td> <input type="submit" name="submitpass" value="Submit"/></td></tr>
                            </table>


					</form>

<?php require_once("footer.php");?>