<?php
require("../Db/Connection.class.php");
$c = new  Connection();
$query = "SELECT * FROM news where id=".$_GET['id'];
$res = mysqli_query($c->con,$query);
$data = mysqli_fetch_array($res);

$latest_query = "SELECT * FROM news where news_categores='Standard' order by id desc limit 0,5";
$latest_res = mysqli_query($c->con,$latest_query);
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Online News</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<header>
			
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="tel:+91 1234567890"><span class="lnr lnr-phone-handset"></span><span>+91 1234567890</span></a></li>
								<li><a href="mailto:onlinenews@gmail.com"><span class="lnr lnr-envelope"></span><span>onlinenews@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap">
				<div class="container">
					<div class="row justify-content-between items-center">
						<div class="col-lg-2 col-md-4 col-sm-12 left no-padding">
							<a href="">
								<img class="img-fluid" src="img/news.png" alt="">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 right no-padding">
							<img class="img-fluid" src="img/banner-ad.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="index.php">Home</a></li>
							<li><a class="menu-has-children" href="">Category</a>
							<ul>
								<li><a href="Standard.php">Standard</a></li>
								<li><a href="Latest.php">Latest</a></li>
								<li><a href="Breaking.php">Breaking</a></li>
								<li><a href="Popular.php">Popular</a></li>
							</ul>
							</li>
							<li><a class="menu-has-children" href="">News Types</a>
							<ul>
								<li><a href="National.php">National</a></li>
								<li><a href="International.php">International</a></li>
								<li><a href="Local.php">Local</a></li>
								<li><a href="Business.php">Business</a></li>
								<li><a href="Science.php">Science & Tech</a></li>
								<li><a href="Ents.php">Ents & Celeb</a></li>
								<li><a href="Arts.php">Arts & Culture</a></li>
								<li><a href="Education.php">Education</a></li>
								<li><a href="Helth.php">Helth</a></li>
								<li><a href="Sports.php">Sports</a></li>
								<li><a href="Politics.php">Politics</a></li>	
								<li><a href="Economic.php">Economic</a></li>
							</ul>
						</li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
						<form class="Search">
							<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>
					</div>
				</div>
			</div>
		</header>
		
		<div class="site-main-container">
			
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="feature-img-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="../public/img/<?php echo $data['5'] ?>" alt="">
								</div>
								<div class="content-wrap">
									<ul class="tags mt-10">
										<li><a href="#">CORONA</a></li>
									</ul>
									<a href="#">
										<h3><?php echo $data['1'] ?></h3>
									</a>
									<ul class="meta pb-20">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span> <?php echo $data['8'] ?></a></li>
										
									</ul>
									<p>
									<?php echo $data['1'] ?>
									</p>
								<blockquote>
								<?php echo $data['3'] ?>
								</blockquote>
								
								
							</div>
						</div>
						<!-- End single-post Area -->
					</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
							<div class="single-sidebar-widget editors-pick-widget">
								<h6 class="title">Video Bite</h6>
								<div class="editors-pick-post">
									<div class="feature-img-wrap relative">
										<div class="feature-img relative">
											<?php echo $data[4] ?>
										</div>
									</div>
									<div class="details">
										<a href="image-post.html">
											<h4 class="mt-20"></h4>
										</a>
									</div>
									<div class="post-lists">
										<?php
											while($data = mysqli_fetch_array($latest_res))								
											{
												echo'<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="../public/img/'.$data[5].'" hight=200 width=150 alt="">
												</div>
												<div class="detail">
													<h6><a href="News-post.php?id='.$data[0].'">'.$data[1].'</a></h6>
													
													<ul class="meta">
														<li><a href="#"><span class="lnr lnr-calendar-full"></span>'.$data[8].'</a></li>
													</ul>
												</div>
											</div>'
											
											?>
											
											<?php 
											}
											?>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>
</body>
</html>