<?php
include("Header.php");
if(isset($_POST['submit']))
{
	$news_title = $_POST['news_title'];
	$news_type = $_POST['news_type'];
	$news_description = $_POST['news_description'];
	$photo = $_FILES['photo']['name'];
	$video = $_POST['video'];
	$news_categores = $_POST['news_categores'];
	$news_city = $_POST['news_city'];
	$date = date("d/m/Y");
	
	if($c->isUnique("select * from news where news_title='$news_title' and date='$date'"))
	{
		move_uploaded_file($_FILES['photo']['tmp_name'],"../public/img/".$_FILES['photo']['name']);

		
		$query = "INSERT INTO `news` (`news_title`, `news_type`, `news_description`,`photo`,`video`,`news_categores`,`news_city`,`date`) VALUES 
		('$news_title', '$news_type','$news_description','$photo','$video','$news_categores','$news_city','$date')";
		
		mysqli_query($c->con,$query) or die("Error : ".mysqli_error($c->con));
		echo '<div class="alert alert-success alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Success!</strong> New News Added;
			</div>';
	}
	else
	{
		echo '<div class="alert alert-danger alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Error!</strong> News Already add !!!
			</div>';
	}
	


}
?>  
<h3>News</h3>
<form method="post" action="" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">News Title</label>
      <input type="text" class="form-control" name="news_title"  placeholder="News Title">
    </div>
	<div class="form-group col-md-6">
    <label for="inputPassword4">News Type</label>
    <select type="text" class="form-control" name="news_type">
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
  <div class="form-group">
    <label for="inputAddress">Description</label>
    <input type="text" class="form-control" name="news_description" placeholder="description">
  </div>
  <div class="form-row">
	<div class="form-group col-md-6">
    <label for="inputAddress2">Photo</label>
    <input type="file" class="form-control" name="photo" placeholder="photo">
	</div>
	<div class="form-group col-md-6">
      <label for="inputEmail4">Video</label>
      <textarea class="form-control" name="video"  placeholder="video" rows=5 cols=10></textarea>
	</div>
  </div>
  <div class="form-row"> 
    <div class="form-group col-md-6">
      <label for="inputPassword4">Category</label>
	  <select type="text" class="form-control" name="news_categores">
			<option>Standard</option>
			<option>Latest</option>
			<option>Breaking</option>
			<option>Popular</option>
	  </select>
	</div>
	<div class="form-group col-md-6">
      <label for="inputCity">Country/State/City</label>
      <input type="text" name="news_city" class="form-control" placeholder="city">
    </div>
	<div class="form-group col-md-6">
		<label for="inputAddress">Date</label>
		<input type="date" class="form-control" name="date" placeholder="">
	</div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include("Footer.php");
?>  