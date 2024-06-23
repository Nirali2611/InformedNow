<?php
require("../Db/Connection.class.php");
$c = new  Connection();
if(isset($_POST['submit']))
{
	
	$email_id = $_POST['email_id'];
	$name = $_POST['name'];
	$message = $_POST['message'];
	$date_of_feedback = date("d-m-y h:m:i");
	
	
		$query = "INSERT INTO `feedback` (`email_id`,`name`,`message`,`date_of_feedback`)
		VALUES ('$email_id', '$name','$message','$date_of_feedback')";
		
		mysqli_query($c->con,$query) or die("Error : ".mysqli_error($c->con));
	echo "<script>alert('Your FeedBack make successful!!!');window.location='contact.php'</script>";
	
}
?>  
