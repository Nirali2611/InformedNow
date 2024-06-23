<?php
include("Header.php");
if(isset($_POST['submit']))
{
	$advertisement_title = $_POST['advertisement_title'];
	$advertisement_type = $_POST['advertisement_type'];
	$advertisement_description = $_POST['advertisement_description'];
	$photo = $_FILES['photo']['name'];
	$video = $_FILES['video']['name'];
	$advertisement_start_date = $_POST['advertisement_start_date'];
	$advertisement_end_date = $_POST['advertisement_end_date'];
	$advertisement_company_name = $_POST['advertisement_company_name'];
	$city = $_POST['city'];
	$membership_fees = $_POST['membership_fees'];
	
	
	
	if($c->isUnique("select * from advertisment where advertisement_title='$advertisement_title' and membership_fees='$membership_fees'"))
	{
		move_uploaded_file($_FILES['photo']['tmp_name'],"../public/img/".$_FILES['photo']['name']);
		move_uploaded_file($_FILES['video']['tmp_name'],"../public/video/".$_FILES['video']['name']);

		
		$query = "INSERT INTO `advertisment` (`advertisement_title`, `advertisement_type`, `advertisement_description`, `photo`,`video`,`advertisement_start_date`,`advertisement_end_date`,`advertisement_company_name`,`city`,`membership_fees`) VALUES 
		('$advertisement_title', '$advertisement_type','$advertisement_description', '$photo','$video','$advertisement_start_date','$advertisement_end_date','$advertisement_company_name','$city','$membership_fees')";
		
		 mysqli_query($c->con,$query) or die("Error : ".mysqli_error());
		echo '<div class="alert alert-success alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Success!</strong> New media Created;
			</div>';
	}
	else
	{
		echo '<div class="alert alert-danger alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Error!</strong> advertisement Already add !!!
			</div>';
	}
}
?>  
<h3>Advertisement</h3>
  <form method="post" action="" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" name="advertisement_title"  placeholder="title">
    </div>
    <div class="form-group col-md-6">
    <label for="inputPassword4">Type</label>
    <select type="text" class="form-control" name="advertisement_type">
      <option>National</option>
      <option>International</option>
      <option>Local</option>
      <option>Business</option>
      <option>Science & Tech</option>
	  <option>Ents & Celeb</option>
	  <option>Arts & Culture</option>
	  <option>Education</option>
	  <option>Helth</option>
	  <option>Sports</option>
	  <option>Politics</option>
	  <option>Economic</option>
    </select>
  </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputAddress">Description</label>
		<input type="text" class="form-control" name="advertisement_description" placeholder="descrtiption">
	</div>
	<div class="form-group col-md-6">
		<label for="inputAddress2">City</label>
		<input type="text" class="form-control" name="city" placeholder="city">
	</div>
  </div>
    <div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputAddress">Image</label>
		<input type="file" class="form-control" name="photo" placeholder="ophoto">
	</div>
	<div class="form-group col-md-6">
		<label for="inputAddress2">Video</label>
		<input type="file" class="form-control" name="video" placeholder="video">
	</div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
		<label for="inputAddress">Start Date</label>
		<input type="date" class="form-control" name="advertisement_start_date" placeholder="">
	</div>
	<div class="form-group col-md-6">
		<label for="inputAddress2">End Date</label>
		<input type="date" class="form-control" name="advertisement_end_date" placeholder="">
	</div>
  </div>
    <div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputAddress">Company Name</label>
		<input type="text" class="form-control" name="advertisement_company_name" placeholder="company name">
	</div>
	<div class="form-group col-md-6">
		<label for="inputAddress2">Membership Fees</label>
		<input type="text" class="form-control" name="membership_fees" placeholder="...">
	</div>
  </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include("Footer.php");
?>  