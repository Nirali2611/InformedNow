<?php
include("Header.php");
if(isset($_POST['submit']))
{
	$Video_title = $_POST['Video_title'];
	$news_type = $_POST['news_type'];
	$video = $_POST['video'];
	$news_categores = $_POST['news_categores'];
	$date = date("d/m/Y");
	
	if($c->isUnique("select * from videoes where Video_title='$Video_title'"))
	{
		
		$query = "INSERT INTO `videoes` (`Video_title`, `news_type`,`video`,`news_categores`,`date`) VALUES 
		('$Video_title', '$news_type','$video','$news_categores','$date')";
		
		mysqli_query($c->con,$query) or die("Error : ".mysqli_error($c->con));
		echo '<div class="alert alert-success alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Success!</strong> New Video Added;
			</div>';
	}
	else
	{
		echo '<div class="alert alert-danger alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Error!</strong> News Video add !!!
			</div>';
	}
	


}
?>  
<h3>Video</h3>
<form method="post" action="" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Video Title</label>
      <input type="text" class="form-control" name="Video_title"  placeholder="">
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
      <label for="inputEmail4">Video</label>
      <textarea class="form-control" name="video"  placeholder="video" rows=5 cols=10></textarea>
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
		<label for="inputAddress">Date</label>
		<input type="date" class="form-control" name="date" placeholder="">
	</div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include("Footer.php");
?>  