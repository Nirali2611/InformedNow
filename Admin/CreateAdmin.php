<?php
include("Header.php");
if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$Mobile_No = $_POST['Mobile_No'];
	$email_id = $_POST['email_id'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$city= $_POST['city'];
	$photo = $_FILES['photo']['name'];	
	$LastLoginDateTime = date("d/m/Y H:i:s");
	
	if($c->isUnique("select * from admin where name='$name' and City='$city'"))
	{
		move_uploaded_file($_FILES['photo']['tmp_name'],"../public/img/".$_FILES['photo']['name']);
		
		
		$query = "INSERT INTO `admin` (`name`, `Mobile_No`, `email_id`, `password`, `address`, `city`, `photo`,`LastLoginDateTime`)
		VALUES ('$name', '$Mobile_No', '$email_id', '$password', '$address', '$city', '$photo','$LastLoginDateTime')";
		
		mysqli_query($c->con,$query) or die("Error : ".mysqli_error($c->con));
		echo '<div class="alert alert-success alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Success!</strong> New admin Created;
			</div>';
	}
	else
	{
		echo '<div class="alert alert-danger alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Error!</strong> admin Already Registerd!!!
			</div>';
	}
}
?>  
<h3>Admin</h3>
  <form method="post" action="" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="name"  placeholder="name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Mobile Number</label>
      <input type="text" class="form-control" name="Mobile_No" placeholder="mobile no">
    </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputAddress">E-mail Id</label>
		<input type="email" class="form-control" name="email_id" placeholder="email id">
	</div>
	<div class="form-group col-md-6">
		<label for="inputAddress2">Password</label>
		<input type="password" class="form-control" name="password" placeholder="password">
	</div>
  </div>
  <div class="form-row"> 
	<div class="form-group col-md-4">
      <label for="inputEmail4">Address</label>
      <input type="text" class="form-control" name="address"  placeholder="address">
	</div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">City</label>
      <input type="text" class="form-control" name="city" placeholder="city">
    </div>
	<div class="form-group col-md-4">
      <label for="inputCity">Photo</label>
      <input type="file" name="photo" class="form-control">
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include("Footer.php");
?>  