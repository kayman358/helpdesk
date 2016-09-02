<?php require_once("head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Service Request</title>

<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>

		   
      <?PHP
$ch1 = 'unchecked';

?>

<script type="text/javascript">
    function validatephone(phone){
		if((isNaN(phone))){
			alert("Enter a valid phone number in the format 08012345678")
			return false
		}
		else
		return true;
	}
</script>
    <script type="text/javascript">
	function checkboxes(){
		var printer = document.getElementById("printer").checked;
			var network = document.getElementById("network").checked;
				var monitor = document.getElementById("monitor").checked;
					var ups= document.getElementById("ups").checked;
						var mouse = document.getElementById("mouse").checked;
							var antivirus = document.getElementById("antivirus").checked;
								var keyboard = document.getElementById("keyboard").checked;
									var desktop = document.getElementById("desktop").checked;
										var cug = document.getElementById("cug").checked;
											var networkcable = document.getElementById("networkcable").checked;
												var ipphone = document.getElementById("ipphone").checked;
													var domain = document.getElementById("domain").checked;
														var internet = document.getElementById("internet").checked;
															var laptop = document.getElementById("laptop").checked;
																var backup = document.getElementById("backup").checked;
																	var toner = document.getElementById("toner").checked;
																	var contact = (document.getElementById("contactp").value);
																	var department = (document.getElementById("department").value);
																	var keyword= (document.getElementById("keyword").value);
																	var explanation = (document.getElementById("explanation").value);
		
		
		if (printer == false && network == false && monitor == false && ups == false && mouse == false && antivirus == false && keyboard == false && desktop == false && cug == false && networkcable == false && ipphone == false && domain == false && internet == false && laptop == false && backup == false && toner == false){
			alert ("Please check a category and make sure all required fields are filled!!!");
			return false;
			}else if (contact.length==0){
		alert("Data Incorrect, Try again!!!!")	
		return false;
			}else if (department.length==0){
		alert("Data Incorrect, Try again!!!!")	
		return false;
			}
			
			else if (explanation.length==0){
		alert("Data Incorrect, Try again!!!!")	
		return false;
			}else if (keyword.length==0){
		alert("Data Incorrect, Try again!!!!")	
		return false;
			}
			 else if (!(printer == false && network == false && monitor == false && ups == false && mouse == false && antivirus == false && keyboard == false && desktop == false && cug == false && networkcable == false && ipphone == false && domain == false && internet == false && laptop == false && backup == false && toner == false) && (contact != " " && department != " " && keyword != " ")) {
		alert("Data Correctly submitted!!!") 
		return true;
		
		}
		
	}
	</script> 
    
		   
  <br />
  <br /> 
<h3>Kindly fill the form below to help resolve your request</h3> <br/>
<strong><p> Required fields are marked with an asterisk (<abbr class="req" title="required">*</abbr>).</p></strong>

<form method="post" class="advertis" action="call.php" id = "myform" onsubmit="return checkboxes()">
		<br /><br />
          <?php if(isset($message)){echo '<h4>'.$message.'</h4>';}  ?>
 <table border="0" cellpadding="6" cellspacing="7" bordercolorlight="#0000FF">
  <tr>
  <td width="300" height="44"><label><span class="contact1">Contact Person:</span><abbr class="req" title="required">*</abbr></label></td>
<td width="499"><input name="username" type="text" class="cok" id="contactp"  size="50" /><br /><br/></td></tr>
 <tr>
<td width="188"> <label><span class="contact1">Department:</span><abbr class="req" title="required">*</abbr></label></td>
<td><select name="department" class="cok" id="department">
<option selected="selected">--choose--</option>
<option>Account</option>
<option>Anaesthesia</option>
<option>Audit</option>
<option>Board Secretariat</option>
<option>CMD Office</option>
<option>Community Health</option>
<option>DCST Office</option>
<option>Dental</option>
<option>DHA Office</option>
<option>Dietetics</option>
<option>Domestic</option>
<option>Engineering</option>
<option>Family Medicine</option>
<option>Free Health</option>
<option>Haematology</option>
<option>Hospital Admin</option>
<option>ICT</option>
<option>Laboratory</option>
<option>Legal</option>
<option>Medicine</option>
<option>NHIS</option>
<option>Nursing Admin</option>
<option>Obs and Gynea</option>
<option>Opthalmology</option>
<option>Paediatrics</option>
<option>Pathology and Forensic</option>
<option>Pharmacy</option>
<option>Physiotheraphy</option>
<option>Public Relations</option>
<option>Psychiatry</option>
<option>Radiology</option>
<option>Service Chatered</option>
<option>Social Welfare</option>
<option>Store</option>
<option>surgery</option>
<option>Theatre</option>
<option>Wards</option>
<option>Quality Assurance</option>
<option>Health info management</option>
</select><br /><br /></td></tr>
<tr>
<td width="188"> <label><span class="contact1">Unit:</span></label></td>
<td><input name="unit" type="text"  class="cok" id="unit" size="50"/><br /><br /></td></tr>
<tr>
  <td width="188" height="68"><label><span class="contact1">Contact Number:<br /><i>(CUG optional)</i></span></label></td>
<td width="499">
<input type="text" size="50" name="number" class="cok" onkeyup=" return validatephone(this.value);"/><br /><br/></td></tr>
<tr>
<td width="188" height="159"> <label><span class="contact1">Complaint Details: <abbr class="req" title="required">*</abbr><br /><i>(Tick as Appropriate)</i></span></label></td>
<td>
<div class ="checkboxes">
<p>
<Input Name = 'ch1[]'  type ='Checkbox' id="printer" value ="Printer" />
<label><span class="contact2">Printer</span></label>
 

<Input Name ='ch1[]' type = 'Checkbox' id="network" value="Network"/> 
 <label><span class="contact2">Network</span></label>
   <input name ='ch1[]6' type = 'Checkbox' id="monitor" value="Monitor" />
 <label><span class="contact2"> Monitor</span></label>

<Input Name ='ch1[]' type = 'Checkbox' id="ups" value="UPS" />
 <label><span class="contact2">UPS</span></label>
 
         <input name ='ch1[]2' type = 'Checkbox' id="mouse" value="Mouse" />
   <label><span class="contact2">Mouse</span></label></p><br />
 <p>    
   <input name ='ch1[]3' type = 'Checkbox' id="antivirus"value="Antivirus" />
    <label><span class="contact2">Anti Virus</span></label>

 <Input Name ='ch1[]' type = 'Checkbox' id="keyboard" value="Keyboard" />
 <label><span class="contact2">Keyboard
   
 </span></label>
 <label><span class="contact2">
   <input name ='ch1[]4' type = 'Checkbox' id="desktop"value="System (Desktop) unit" />
   System (Desktop) Unit</span></label>
 
  <Input Name ='ch1[]' type = 'Checkbox' id="cug" value="CUG"/>
  <label><span class="contact2">CUG</span></label>
  </p><br />
  <p> 
  <Input Name ='ch1[]' type = 'Checkbox' id="networkcable" value="cable"/>
  <label><span class="contact2">Network Cable</span></label>
  <input name = 'ch1[]5' type ='Checkbox' id="ipphone" value ="IP_phone" />
<label><span class="contact2">IP Phone</span></label>


<Input Name = 'ch1[]' type ='Checkbox' id="domain" value ="Domain" />
<label><span class="contact2">Domain Account</span></label>
 </p><br />
 <p>
<Input Name ='ch1[]' type = 'Checkbox' id="internet" value="internet"/>
  <label><span class="contact2">Internet Connectivity</span></label>
  <input name ='ch1[]7' type = 'Checkbox' id="laptop"value="System (Laptop) unit" />
  <label><span class="contact2"> System (Laptop) Unit</span></label>

   <Input Name ='ch1[]' type = 'Checkbox' id="backup"value="Data Backup" />
  <label><span class="contact2">Data Backup</span></label><br /><br />
 <Input Name ='ch1[]' type = 'Checkbox' id="toner"value="Printer Toner/Ink" />
  <label><span class="contact2">Printer Toner/Ink</span></label>
  </p>
  </div>
<br /><br />
</td>
</tr>
<tr>
<td width="188"> <label><span class="contact1">Issue Keyword:<br /><i>(Important)</i></span><abbr class="req" title="required">*</abbr></label></td>
<td><input name="keyword" type="text"  class="cok" id="keyword"  size="50"/><br /><br /></td></tr>
<tr>
<td width="188"> <label><span class="contact1">Brief Expalantion:</span><abbr class="req" title="required">*</abbr></label></td>
<td><textarea name="brief_explanation" cols="50" class="cok" rows="10" id="explanation" maxlength=" "></textarea><br /></td></tr>

<tr> <td width="188"></td><br /><br />
<td> <input type="submit" class="btn btn-success"  name="subsupport" value="Submit"/></td></tr>
  </table>

</form><br />
		   
<?php require_once("footer.php"); ?>

