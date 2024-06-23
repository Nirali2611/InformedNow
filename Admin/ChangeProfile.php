<?php
include("Header.php");
if(isset($_POST['submit']))
{
	$Mobile_No = $_POST['Mobile_No'];
	$name = $_POST['name'];
	if($c->isUnique("select * from admin where Mobile_No='$Mobile_No'"))
	{
		$query = "update admin set name='$name',Mobile_No='$Mobile_No'where email_id='".$_SESSION ['AdminData']['email_id']."'";
		
		mysqli_query($c->con,$query) or die("Error : ".mysqli_error($c->con));
		echo '<div class="alert alert-success alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Success!</strong> Your Profile Change Successful;
			</div>';
	}
	else
	{
		echo '<div class="alert alert-danger alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Error!</strong> Mobile No Already Registerd!!!
			</div>';
	}
}
$query = "SELECT * FROM admin where email_id='".$_SESSION['AdminData']['email_id']."'";
$res= mysqli_query($c->con,$query)or die("Error : ".mysqli_error($c->con));
$data = mysqli_fetch_array($res);
?>  
  <h3>Change Profile</h3>
  <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile No </label>
    <input type="number" name="Mobile_No" value= "<?php echo $data['2'];?>"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile No">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Your Name</label>
    <input type="text" name="name" value= "<?php echo $data['1'];?>"class="form-control"  placeholder="Your Name">
  </div> 
  
  <button type="submit" name="submit" class="btn btn-primary">Change Profile</button>
</form>
<?php
include("Footer.php");
?>  