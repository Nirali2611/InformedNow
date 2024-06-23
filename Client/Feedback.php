<?php
require("../Db/Connection.class.php");
$c = new  Connection();
if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$email_id = $_POST['email_id'];
	$message = $_POST['message'];
		
	$query = "INSERT INTO `feedback` (`name`, `email_id`, `message`)
		VALUES ('$name', '$email_id', '$message')";
		
	mysqli_query($c->con,$query) or die("Error : ".mysqli_error($c->con));
	echo "<script>alert('Your Feedback Send successful!!!');window.location='contact.php'</script>";
	

}
?>
