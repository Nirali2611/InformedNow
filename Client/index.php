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
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  <script>
		  $(document).ready(function(){
			  $("#myModal").modal('show');
		  });
	  </script>
	</head>
	<body>

	<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subscribe our News website </h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="register.php" method="post">
						<div class="form-group">
							<label for="inputEmail4">Name</label>
							<input type="text" class="form-control" name="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="inputPassword4">Mobile Number</label>
							<input type="number" class="form-control" name="Mobile_No" placeholder="mobile no">
						</div>
						<div class="form-group">
							<label for="inputAddress">E-mail Id</label>
							<input type="email" class="form-control" name="email_id" placeholder="email id">
						</div>
						<div class="form-group">
						 <label for="inputEmail4">Address</label>
							<textarea type="text" class="form-control" name="address" placeholder="address"></textarea>
						</div>
					
						<div class="form-group">
						 <label for="inputPassword4">Gender</label>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
								<label class="form-check-label" for="exampleRadios1">Male</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Female" checked>
								<label class="form-check-label" for="exampleRadios1">Female</label>
							</div>  
						</div>
						<div class="form-group">
						 <label for="inputPassword4">City</label>
							<input type="text" class="form-control" name="city" placeholder="city">
						</div>
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

		<header>
			
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+91 1234567890</span></a></li>
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
							<img class="img-fluid" src="img/Advs1.jpg" alt="">
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
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">
						<div class="col-lg-8 top-post-left">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="img/vr.jpg" alt="">
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li><a href="https://timesofindia.indiatimes.com/city/ahmedabad/gujarat-government-sanctions-rs-165-20-crore-for-developmental-projects-in-surat-vapi/articleshow/81533170.cms">
									GUJARAT</a></li>
								</ul>
								<a href="https://timesofindia.indiatimes.com/city/ahmedabad/gujarat-government-sanctions-rs-165-20-crore-for-developmental-projects-in-surat-vapi/articleshow/81533170.cms">
									<h3>Gujarat government sanctions Rs 165.20 crore for development projects in Surat, Vapi</h3>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>16 March , 2021</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 top-post-right">
							<div class="single-top-post">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/1.jfif" alt="">
								</div>
								<div class="top-post-details">
									<ul class="tags">
										<li><a href="https://timesofindia.indiatimes.com/city/ahmedabad/gujarat-night-curfew-timings-increased-by-an-hour-in-ahmedabad/articleshow/81574777.cms">
										</a>Ahmedabad</li>
									</ul>
									
									<a href="https://timesofindia.indiatimes.com/city/ahmedabad/gujarat-night-curfew-timings-increased-by-an-hour-in-ahmedabad/articleshow/81574777.cms">
										<h4>Gujarat: Night curfew timings increased by an hour in Ahmedabad</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>20 March, 2021</a></li>
									</ul>
								</div>
							</div>
							<div class="single-top-post mt-10">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/2.jpg" alt="">
								</div>
								<div class="top-post-details">
									<ul class="tags">
										<li><a href="https://timesofindia.indiatimes.com/city/rajkot/exams-as-planned-for-pg-courses/articleshow/81580857.cms">Rajkot</a></li>
									</ul>
									
									<a href="https://timesofindia.indiatimes.com/city/rajkot/exams-as-planned-for-pg-courses/articleshow/81580857.cms">
										<h4>College exams put off, schools shut in 8 cities in Gujarat</h4>
									</a>
									
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h6><span>Breaking News:</span><a href="https://www.ndtv.com/india-news/pm-narendra-modi-to-launch-catch-the-rain-campaign-on-monday-2395701">PM Modi To Launch "Catch The Rain" Campaign On Monday</a></h6>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Latest News</h4>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="img/3.jpg" alt="">
										</div>
										<ul class="tags">
											<li><a href="https://alertbreakingnews.com/ind-vs-eng-5th-t20i-india-clinch-series-against-england-in-style-as-big-guns-boom-cricket-news-times-of-india/">
											Cricket</a></li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="https://alertbreakingnews.com/ind-vs-eng-5th-t20i-india-clinch-series-against-england-in-style-as-big-guns-boom-cricket-news-times-of-india/">
											<h4>Ind vs Eng 5th T20I: India clinch series against England in style as big guns boom</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>21 march, 2021</a></li>
										</ul>
										<p class="excert">
											Having played catch-up twice to level the series, India dished out top drawer stuff to clinch the fifth T20I by 36 runs.
										</p>
										
									</div>
								</div>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="img/4.jpg" alt="">
										</div>
										<ul class="tags">
											<li><a href="https://timesofindia.indiatimes.com/sports/cricket/ipl/top-stories/ipl-2021-schedule-mi-face-rcb-in-opener-on-april-9-final-on-may-30/articleshow/81375548.cms">
											</a>Cricket</li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="https://timesofindia.indiatimes.com/sports/cricket/ipl/top-stories/ipl-2021-schedule-mi-face-rcb-in-opener-on-april-9-final-on-may-30/articleshow/81375548.cms">
											<h4>IPL 2021 schedule announced: MI face RCB in opener on April 9, final on May 30</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>07 March,2021</a></li>
										</ul>
										<p>NEW DELHI: The Board of Control for Cricket in India (BCCI) on Sunday announced the schedule for
     										the upcomig edition of the Indian Premier League (IPL).
										</p>
										
									</div>
								</div>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="img/5.jpg" alt="">
										</div>
										<ul class="tags">
											<li><a href="https://timesofindia.indiatimes.com/sports/football/top-stories/manchester-city-leave-it-late-to-beat-everton-and-reach-cup-semis/articleshow/81613214.cms">FootBall</a></li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="https://timesofindia.indiatimes.com/sports/football/top-stories/manchester-city-leave-it-late-to-beat-everton-and-reach-cup-semis/articleshow/81613214.cms">
											<h4>Manchester City leave it late to beat Everton and reach Cup Semis</h4>
										</a>
										<ul class="meta">
										    <li><a href="#"><span class="lnr lnr-calendar-full"></span>21 March  , 2021</a></li>
										</ul>
										<p>LIVERPOOL: Manchester City's quadruple bid remained intact as late goals by 
										Ilkay Gundogan and Kevin de Bruyne secured a 2-0 win at Everton in their FA Cup quarter-final clash on Saturday.
										</p>
										
									</div>
								</div>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="img/6.jfif" alt="">
										</div>
										<ul class="tags">
											<li><a href="https://www.aninews.in/news/sports/hockey/haryana-wins-11th-hockey-india-sub-junior-women-national-championship20210319093920/#:~:text=Simdega%20(Jharkhand)%20%5BIndia%5D,between%20two%20high%2Dscoring%20sides.">Hocky</a></li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="https://www.aninews.in/news/sports/hockey/haryana-wins-11th-hockey-india-sub-junior-women-national-championship20210319093920/#:~:text=Simdega%20(Jharkhand)%20%5BIndia%5D,between%20two%20high%2Dscoring%20sides.">
											<h4>Haryana wins 11th Hockey India Sub-Junior Women National Championship.</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>19 March, 2021</a></li>
										</ul>
										<p>SIMDEGA: Haryana defeated Jharkhand 4-3 in a shootout to clinch the 11th Hockey India sub-juniour 
										women National Championship 2021 title after the final ended 0-0 on Thursday.
										</p>
										
									</div>
								</div>
							</div>
							<!-- End latest-post Area -->
							
							<!-- Start banner-ads Area -->
							<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="img/Advs2.jpg" alt="">
							</div>
							<!-- End banner-ads Area -->
							<!-- Start popular-post Area -->
							<div class="popular-post-wrap">
								<h4 class="title">Popular Posts</h4>
								<div class="feature-post relative">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="img/50.jpg" alt="">
									</div>
									<div class="details">
										<ul class="tags">
											<li><a href="https://indianexpress.com/article/opinion/columns/maoist-crpf-rss-right-wing-politics-7291562/">Popular</a></li>
										</ul>
										<ul class="meta">
										<a href="https://indianexpress.com/article/opinion/columns/maoist-crpf-rss-right-wing-politics-7291562/" src="">
											<h3>The Maoist challenge</h3>
										</a>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>27 April, 2018</a></li>
										</ul>
									</div>
								</div>
								<div class="row mt-20 medium-gutters">
									<div class="col-lg-6 single-popular-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="img/31.jpg" alt="">
											</div>
											<ul class="tags">
												<li><a href="https://www.ndtv.com/india-news/appropriate-decision-on-lockdown-in-maharashtra-after-april-14-state-health-minister-rajesh-tope-2411324">
												Corona</a></li>
											</ul>
										</div>
										<div class="details">
											<a href="https://www.ndtv.com/india-news/appropriate-decision-on-lockdown-in-maharashtra-after-april-14-state-health-minister-rajesh-tope-2411324">
												<h3>Lockdown Needed, But Decision After Wednesday: Maharashtra Minister</h3>
											</a>
											<ul class="meta">			
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2021</a></li>
											</ul>
											<p class="excert">
												Maharashtra Health Minister Rajesh Tope was speaking to reporters after a virtual meeting of the COVID-19 task force 
												chaired by Chief Minister Uddhav Thackeray to discuss measures, including imposition of a lockdown in the state, to break the virus chain.
											</p>
											
										</div>
									</div>
									<div class="col-lg-6 single-popular-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="img/60.jpg" alt="">
											</div>
											<ul class="tags">
												<li><a href="https://indianexpress.com/article/cities/pune/spectre-of-second-lockdown-haunts-industries-in-pimpri-chinchwad-7293590/">Pune</a></li>
											</ul>
										</div>
										<div class="details">
											<a href="https://indianexpress.com/article/cities/pune/spectre-of-second-lockdown-haunts-industries-in-pimpri-chinchwad-7293590/">
												<h4>Spectre of second lockdown haunts industries in Pimpri Chinchwad</h4>
											</a>
											<ul class="meta">
												<li><a href=""><span class="lnr lnr-calendar-full"></span>29 April,2021</a></li>
											</ul>
											<p class="excert">
												Industrial units in Pimpri Chinchwad are facing an uncertain future even as talks of an extension to the ongoing restrictions gains ground. Around 40-45 per cent of the 11,500 units in Pimpri Chinchwad who
												do not qualify as essential or export units are closed in the area and a further extension of the restrictions would have a debilitating effect on them
											</p>
											
										</div>
									</div>
								</div>
							</div>
							<!-- End popular-post Area -->

						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Editor’s Pick</h6>
									<div class="editors-pick-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="img/51.jpg" alt="">
											</div>
											<ul class="tags">
												<li><a href="https://indianexpress.com/article/entertainment/bollywood/pankaj-tripathi-on-irrfan-khan-7289932/">Entertainment</a></li>
											</ul>
										</div>
										<div class="details">
											<a href="https://indianexpress.com/article/entertainment/bollywood/pankaj-tripathi-on-irrfan-khan-7289932/">
												<h4 class="mt-20">Pankaj Tripathi choked up remembering ‘inspiration’ Irrfan Khan: ‘I
												will be honoured if people consider me an actor like him’</h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>29 April, 2021</a></li>
											</ul>
											<p class="excert">
												Pankaj Tripathi got the opportunity to share the screen space with late actor Irrfan Khan in Angrezi Medium.
											</p>
										</div>
										<div class="post-lists">
											<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="img/54.jpg" alt="">
												</div>
												<div class="detail">
													<a href="https://indianexpress.com/article/entertainment/bollywood/ranbir-kapoor-on-relationship-with-dad-rishi-kapoor-i-wish-we-could-be-friendlier-7292440/">
													<h6>When Ranbir Kapoor spoke on relationship with dad Rishi Kapoor: ‘I wish we could be friendlier, spend more time together’</h6></a>
													<ul class="meta">
														<li><a href=""><span class="lnr lnr-calendar-full"></span>29 April, 2021</a></li>
													</ul>
												</div>
											</div>
											<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="img/53.jpg" alt="">
												</div>
												<div class="detail">
													<a href="https://indianexpress.com/article/lifestyle/health/what-is-long-covid-syndrome-7292346/"><h6>A doctor explains: What is ‘long COVID syndrome’?</h6></a>
													<ul class="meta">
														<li><a href="#"><span class="lnr lnr-calendar-full"></span>29 April, 2021</a></li>
													</ul>
												</div>
											</div>
											<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="img/55.jpg" alt="">
												</div>
												<div class="detail">
													<a href="https://indianexpress.com/article/technology/tech-news-technology/google-assistant-to-get-new-features-will-soon-be-able-to-pronounce-names-correctly-7294896/"><h6>Google Assistant to get new features; will soon be able to pronounce names correctly</h6></a>
													<ul class="meta">
														<li><a href="#"><span class="lnr lnr-calendar-full"></span></a>29 April, 2021</li>
														
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<img class="img-fluid" src="img/Advs.jpg" alt="">
								</div>
								<div class="single-sidebar-widget most-popular-widget">
									<h6 class="title">Most Popular</h6>
									<div class="single-list flex-row d-flex">
										<div class="thumb">
											<img src="img/56.jpg" alt="">
										</div>
										<div class="details">
											<a href="https://indianexpress.com/article/opinion/columns/the-pandemic-has-exposed-indias-dirty-truth-a-broken-sanitation-system-7292937/">
												<h6>The pandemic has exposed India’s dirty truth: a broken sanitation system</h6>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span></a>28 April, 2021</li>
												
											</ul>
										</div>
									</div>
									<div class="single-list flex-row d-flex">
										<div class="thumb">
											<img src="img/57.jpg" alt="">
										</div>
										<div class="details">
											<a href="https://indianexpress.com/article/cities/delhi/gurdwara-in-ghaziabad-offers-oxygen-langar-for-covid-patients-7295770/">
												<h6>Gurdwara in Ghaziabad offers “oxygen langar” for Covid patients</h6>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>29 April, 2021</a></li>
												
											</ul>
										</div>
									</div>
									<div class="single-list flex-row d-flex">
										<div class="thumb">
											<img src="img/58.jpg" alt="">
										</div>
										<div class="details">
											<a href="https://indianexpress.com/article/technology/gaming/playstation-state-of-play-april-event-today-start-time-and-how-to-watch-the-live-stream-7295605/">
												<h6>PlayStation State of Play April event today: Start time and how to watch the live stream </h6>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>29 April, 2021</a></li>
												
											</ul>
										</div>
									</div>
									<div class="single-list flex-row d-flex">
										<div class="thumb">
											<img src="img/59.jpg" alt="">
										</div>
										<div class="details">
											<a href="https://indianexpress.com/article/business/startups/byjus-to-become-indias-most-valuable-startup-after-ubs-funding-7293434/">
												<h6>Byju’s to become India’s most-valuable startup after UBS funding</h6>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span></a>29 April, 2021</li>
											</ul>
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
		
		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>Top News</h4>
						<ul>
							<li><a href="International.php">International</a></li>
							<li><a href="National.php">National</a></li>
							<li><a href="Politics.php">Politics</a></li>
							<li><a href="Science.php">Science</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="Sports.php">Sports</a></li>
							<li><a href="Local.php">Local</a></li>
							<li><a href="Health.php">Health</a></li>
							<li><a href="Business.php">Business</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Features</h4>
						<ul>
							<li><a href="Education.php">Education</a></li>
							<li><a href="Arts.php">Arts</a></li>
							<li><a href="Economic.php">Economic</a></li>
							<li><a href="Ents.php">Ents</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Category</h4>
						<ul>
							<li><a href="Standard.php">Standard</a></li>
							<li><a href="Latest.php">Latest</a></li>
							<li><a href="Breaking.php">Breaking</a></li>
							<li><a href="Popular.php">Popular</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>News Feed</h4>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="footer-bottom row align-items-center">
				
				</div>
			</div>
		</footer>
		<!-- End footer Area -->
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/mn-accordion.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>