<!-- get form from checkout.php - form name="checkout" -->
<!-- isset () is used to check if the item exist or not,  -->
<?php
   $name = ($_REQUEST['fname']);
   $email = ($_REQUEST['email']);
   $email_msg = "Hi, ".$name." Thank you for purchasing with us, please find your invoice attached at this email";
   
   print "Hey, ".$name."! We have sent your invoice at the ".$email." you've given.";   
   
   mail($_REQUEST[$email] ,"email invoice", $email_msg);
   
?> 