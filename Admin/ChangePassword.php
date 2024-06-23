<?php
include("Header.php");

if(isset($_POST['submit']))
{
	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$new_confirm_password = $_POST['new_confirm_password'];
	if($new_password != $new_confirm_password )
	{
			echo '<div class="alert alert-danger alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Not Match!</strong>New Password and New Confirm Password Not Match;
			</div>';
	}	
	else if($new_password !== $_SESSION['AdminData']['password'])
	{
		echo '<div class="alert alert-danger alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Not Match!</strong> Old Password Not Match;
			</div>';
	}
	else
	{
		$query = "UPDATE Admin set password= '$new_password'where email_id = '".$_SESSION['AdminData']['email_id']."'";
		mysqli_query($c->con,$query) or dia("Error : ".mysqli_error($c->con));
		$_SESSION['AdminData']['password'] = $new_password;
		echo '<div class="alert alert-success alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Update</strong> You Password is Update Successful;
			</div>';
	}
}
?>  
  <h3>Change Password</h3>
  <form action="" method="post"> 
  <div class="form-group">
    <label for="exampleInputPassword1">Old Password</label>
    <input type="password" name="old_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" name="new_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">New Confirm Password</label>
    <input type="password" name="new_confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div> 
  <button type="submit" name="submit" class="btn btn-primary">Change Password</button>
</form>
 
<?php
include("Footer.php");
?>  