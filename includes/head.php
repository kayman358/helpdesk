<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Agriculture Frame</title>
<link type="text/css" rel="stylesheet" href="css/default.css" />
 <script src="js/jquery.js"></script>
<script>
$(function(){
	$('.slideShow img:gt(0)').hide();
	setInterval(function(){$('.slideShow :first-child').fadeOut().next('img').fadeIn().end().appendTo('.slideShow');}, 5000);
});
</script>
</head>
<body>

    <div id="wrapper">
        <div id="header">
          <p class="log">Welcome to E-Agriculture</p>
          <?php 
		  if(isset($_SESSION['companyId'])){ ?>
          <div class="login">
		  <?php
			  echo '<a href="timeout.php">Logout</a>';
			  ?>
              </div><!---login-->
              <?php
			  }else{
		  ?>
          
          <div class="login">Enter Here
            <div class="login_form">
              <form action="index.php" method="post">
              <input type="text" name="companyId" id="companyId" placeholder="Company ID" /><br />
              <input type="password" name="pass" id="pass" placeholder="Password" /><br />
              <input type="submit" name="submitLogin" id="submitLogin" value="Login" />
              </form>
            </div><!--login_form--->
          </div><!---login--->
          <?php } ?>
          <div class="monitor">
          <i><a href="checkOut.php">make confirmation</a> </i>||
          <?php 
		  if(isset($_SESSION['companyId'])){
		  $companyId = $_SESSION['companyId'];
		  $query = "SELECT * FROM purchased WHERE status = 'active' AND companyId = '{$companyId}'";
		  $result_set = mysql_query($query);
		  confirm_query($result_set);
		  $result = mysql_num_rows($result_set);
		  if($result>0){
		  echo 'Items: '.$result;
		  }else{
			  //result else
			  echo '0 item';
			  
			  }
		  }else{
			  //session else
		  echo '0 item';
		  }
		  ?>
          </div>
          <div class="clear"></div>
        </div><!---header-->