<?php
include("Header.php");
if(isset($_POST['submit']))
{
	$comment = $_POST['comment'];
	$page_id = $_POST['page_id'];
	$page_name = $_POST['page_name'];
	$date = date("d-m-y h:m:i");
	
	if($c->isUnique("select * from comments where comment='$comment' and page_name='$page_name'"))
	{

		$query = "INSERT INTO `comments` (`comment`, `page_id`, `page_name`, `date`) VALUES ('$comment', '$page_id','$page_name', '$date')";
		
		mysqli_query($c->con,$query) or die("Error : ".mysqli_error());
		echo '<div class="alert alert-success alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Success!</strong> New commnets added;
			</div>';
	}
	else
	{
		echo '<div class="alert alert-danger alert-dismissible">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong>Error!</strong> comments Already add !!!
			</div>';
	}
}
?>  
  <h3>Comment</h3>
  <form method="post" action="" enctype="multipart/form-data">
  <div class="form-group ">
    <label for="exampleInputPassword1">Comment</label>
    <input type="text" name="comment" class="form-control" id="exampleInputPassword1" placeholder="news id">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Page Id </label>
    <input type="text" name="page_id" class="form-control" id="exampleInputPassword1" placeholder="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Page Name</label>
    <input type="text" name="page_name" class="form-control" id="exampleInputPassword1" placeholder="page name">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Add Comment</button>
</form>
<?php
include("Footer.php");
?>  