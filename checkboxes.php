<link rel="stylesheet" type="text/css" href="css/style.css" />
<?PHP
$ch1 = 'unchecked';
$ch2 = 'unchecked';
$ch3 = 'unchecked';
$ch4 = 'unchecked';
$ch5 = 'unchecked';

if (isset($_POST['Submit1'])) {

if (isset($_POST['ch1'])) {
$ch1 = $_POST['ch1'];

if ($ch1 ='net') {
$ch1 = 'checked';
}
}

if (isset($_POST['ch2'])) {
$ch2 = $_POST['ch2'];

if ($ch2 = 'word') {
$ch2 = 'checked';
}
}

if (isset($_POST['ch3'])) {
$ch3 = $_POST['ch3'];

if ($ch3 = 'excel') {
$ch3 = 'checked';
}
}

if (isset($_POST['ch4'])) {
$ch4 = $_POST['ch4'];

if ($ch4 = 'web') {
$ch4 = 'checked';
}
}

if (isset($_POST['ch5'])) {
$ch5 = $_POST['ch5'];

if ($ch5 =  'php') {
$ch5 = 'checked';
}
}
}

?>


<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="checkBoxes.php">

<Input type = 'Checkbox' Name ='ch1' value ="net" 
 <label><span class="contact1">Printer</span></label>
<p>
<Input type = 'Checkbox' Name ='ch2' value="word" 
 <label><span class="contact1">Network</span></label>
<P>
<Input type = 'Checkbox' Name ='ch3' value="excel" 
 <label><span class="contact1">Monitor</span></label>
<P>
<Input type = 'Checkbox' Name ='ch4' value="web" 
 <label><span class="contact1">UPS</span></label>
<P>
<Input type = 'Checkbox' Name ='ch5' value="php" 
 <label><span class="contact1">RAM</span></label>
<P>


<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Choose your books">
</FORM>

</body>
</html>