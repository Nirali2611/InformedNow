<?php
require("../Db/Connection.class.php");
$c = new  Connection();
if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$Mobile_No = $_POST['Mobile_No'];
	$email_id = $_POST['email_id'];
	$address = $_POST['address'];
	$gender= $_POST['gender'];
	$city= $_POST['city'];
	
	
		
	$query = "INSERT INTO `register` (`name`, `Mobile_No`, `email_id`, `address`,`gender`, `city`)
		VALUES ('$name', '$Mobile_No', '$email_id', '$address','$gender', '$city')";
		
	mysqli_query($c->con,$query) or die("Error : ".mysqli_error($c->con));
	echo "<script>alert('Your registraction make successful!!!');window.location='index.php'</script>";
	

}
?>