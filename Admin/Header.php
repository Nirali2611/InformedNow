<?php
session_start();
if(!isset($_SESSION['AdminData']))
{
	echo "<script>alert('Invalid Request....!Contact to admin')
	window.location='index.php'</script>";
}
require("../Db/Connection.class.php");
$c = new  Connection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <base url="\">	
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../public/bootstrap.min.css">
  <script src="../public/jquery.min.js"></script>
  <script src="../public//popper.min.js"></script>
  <script src="../public//bootstrap.min.js"></script>
</head>
<style>
button:focus
{
    outline: 0;
}

.navbar .dropdown-menu .form-control 
{
    width: 200px;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#">Online News</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
		
		
		
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Admin</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="CreateAdmin.php">Add</a>
					<a class="dropdown-item" href="ManageAdmin.php">Manage</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				News</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="CreateNews.php">Add</a>
					<a class="dropdown-item" href="ManageNews.php">Manage</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Feedback/Subscriber</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="CreateFeedbackSubscriber.php">Add</a>
					<a class="dropdown-item" href="ManageFeedbackSubscriber.php">Manage</a>
				</li>
<!-- 
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Comments</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="CreateComments.php">Add</a>
					<a class="dropdown-item" href="ManageComments.php">Manage</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Advertisement</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="CreateAdvertisement.php">Add</a>
					<a class="dropdown-item" href="Manageadvertisement.php">Manage</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Video</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="CreateVideo.php">Add</a>
					<a class="dropdown-item" href="ManageVideo.php">Manage</a>
				</li>
-->
				
				<a class="nav-link" href="ManageRegister.php" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
				User</a>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle"><?php  echo $_SESSION['AdminData']['email_id'];?><span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                       <li class="px-3 py-2">
							<small><a href="ChangePassword.php">Change Password</a></small><br>
							<small><a href="ChangeProfile.php">Change Profile</a></small><br>  
							<small><a href="Logout.php">Log Out</a></small>       							
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Forgot password</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Reset your password..</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<br>
<div class="mt-5 container">
