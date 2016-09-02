<?php require_once("head.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/form_function.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/track.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
<div class="container-fluid">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LASUTH ICT CALL LOGGER</title>

</head>



<br />
<br />
<br />
<br />
<br />
<div id ="contp">
<p>You are most welcome to the online call logging interface of Lagos state University Teaching Hospital Ikeja, ICT is poised to serve you better. Just click on the Enter button below to talk to us.</p>
<br />
<br />
</div>
<body>

<form method="post"  action="log.php">


 
<div class="buttonHolder"> 
 <input type="submit" class="btn btn-success btn-lg" name="submitLogin" value="Enter"/>
   </div>  


                     
                         
</form>
</body>
<br />
<br />
<br />
<?php require_once("footer.php"); ?>
</div>
</html>