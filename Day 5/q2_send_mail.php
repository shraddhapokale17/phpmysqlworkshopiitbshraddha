<?php

if(@$_POST['submit'])
{
@$name  = $_POST['name'];
@$email = $_POST['email'];
@$feedback = $_POST['feedback'];


if(empty($name))
{
	$errors[]= 'Name is empty';
}
/*if(empty($email))
{
	$errors[]= 'Email is empty';
}
else if (!filter_var($email,FILTER _VALIDATE_EMAIL)){
		$errors[]= 'Email is invalid';
}*/

if($email && $name)
{
	
	$to="gayatripokale25@gmail.com,opokale@gmail.com";
    $respond_subject="mail from me";
	$respond_message="here are the details of $name and their feedback is $feedback";
	$headers="From:shraddhapokale17@gmail.com";
	$body="Thank you so much for giving feedback";
	
	mail($to,$respond_subject,$respond_message,$body,$headers);
	echo "thank you $name for giving feedback.";
	
	}
	

else
	
	
		die ("You Must enter  $name and $email ");
	
	
}








?>
<html>
<h2 style="color:red";>Feedback Form</h2>
<form action="q2_send_mail.php" method="post">
Name:<input type="text" name="name" maxlength=20 placeholder="Enter your name here!"><br><br>
Email:<input type="email" name="email" placeholder="Enter Email Id "><p>
Feedback:<textarea name="feedback" maxlength=200 placeholder="What you feel about us!"></textarea><br><br>
<input type="submit" name="submit" value="Send Email">



</form>




</html>

