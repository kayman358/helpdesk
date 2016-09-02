<div id="nav">
 <br /><br />
        <a href="index.php">Home</a><br />
         <a href="aboutus.html">About us</a><br />
          <a href="contactus.html">Contact us</a><br />
          <a href="catalog.php">View products</a><br />
          <a href="lastPurchase.php">Selected Items</a><br />
          <a href="history.php">Preview goods</a><br />
          
          <br /><br />
           <?php if(isset($_SESSION['email'])){ ?>
           <p id="yello7">Account Details</p><br />
         Welcome:<br /><a href="#"><?php echo $_SESSION['email']; ?></a><br />.....................................<br />
        <a href="editprofile.php?action=needsupport">Need DSS support?</a><br />
         <a href="editprofile.php?action=user">Edit profile</a><br />
          <a href="lastPurchase.php">Delete selected item</a><br />
          <a href="history.php">Preview goods purchased</a><br />
 <?php  } ?>
        </div><!--nav-->