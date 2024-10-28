<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="Bahrain This Month" />
	<meta name="robots" content="" />
	<meta name="description" content="Events, Entertainment & Things To Do In Bahrain" />
	<meta property="og:title" content="Bahrain This Month" />
	<meta property="og:description" content="Events, Entertainment & Things To Do In Bahrain" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Bahrain This Month</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/plugins/calendar/calendar.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/templete.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/skin/skin-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/star-rating-svg.css') }}">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Poppins Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/plugins/editor/jquery-te-1.4.0.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/plugins/drop/imageuploadify.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frond/plugins/tag-editor/jquery.tag-editor.css') }}">
	
</head>
<body id="bg">
<!-- <div id="loading-area"></div> -->
<div class="page-wraper">

	<!-- <header class="site-header header-transparent mo-left headertop-new">
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                
                        <div class="new-nav">
                            <p class="new-nav"><i class="fa fa-user"></i> &nbsp; Login</p>
                        </div>
             
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
               
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="signin.html" class="site-button-link sign_btn"><i class="fa fa-user"></i> &nbsp; Login</a>
							<a href="signin.html" class="site-button-link sign_btn"><i class="ti-import m-r5 rotate90"></i> &nbsp;Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->


    <div class="topbar">
    	<div class="container clearfix">
            <div class="logo-header mostion">
				<p class="new-nav-p"> Thursday, May 28, 2024</p>
			</div>

			<div class="extra-nav mob-event-btn">
                <div class="extra-cell">
					<a href="addevent.html" class="site-button radius-xl m-l10 navbar_btn"><i class="fa fa-plus m-r5"></i> Add Events</a>
                </div>
           	</div>
 
            <div class="extra-nav extra-new-nav">
                <div class="extra-cell">
	               	<ul class="list-inline m-a0 footericon-new">
						<li class="iconlist-fb"><a href="#" target="_blank"><i class="fa fa-facebook-f icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-linkedin-in icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-youtube-play icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-twitter icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-whatsapp icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-pinterest-p icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-instagram icon-topbar"></i></a></li>
					</ul>
	                <a href="{{url('signin')}}" class="site-button-link sign_btn-new"><i class="fa fa-user"></i> &nbsp; Login</a>
					<a href="{{url('signin')}}" class="site-button-link sign_btn-new"><i class="ti-import m-r5 rotate90"></i> &nbsp;Sign Up</a>
                </div>
            </div>
        </div>
    </div>


	<!-- header -->
    <header class="site-header header-transparent mo-left">
		<!-- main header -->

        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix header-newsec">
                    <!-- website logo -->
                    <div class="logo-header mostion moblogo-new">
						<a href="index.php" class="logo-1"><img src="{{ asset('assets/frond/images/logo-black.png') }}" alt=""></a>
						<a href="index.php" class="logo-2"><img src="{{ asset('assets/frond/images/logo-black.png') }}" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end toggler-new" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav mobarea-btn">
                        <div class="extra-cell">
                            <!-- <a href="signin.html" class="site-button-link sign_btn"> Sign In</a> -->
							<a href="{{url('addevent')}}" class="site-button radius-xl m-l10 navbar_btn"><i class="fa fa-plus m-r5"></i> Add Events</a>

							<div class="wrapper-search">
								<div class="btn-search">
								    <i class="fa fa-search" aria-hidden="true"></i>
								</div>
								<div class="form">
								    <label id="search">Search here</label><br>
								    <input type="text" class="input">
								</div>
							</div>
                        </div>

                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
					<ul class="nav navbar-nav">              
							
							<li class="down"><a href="{{ url('events') }}">Events</a>
								<ul class="sub-menu">
									<li><a href="event-single-page.html">Theatre</a></li>
									<li><a href="event-single-page.html">Live shows</a></li>
									<li><a href="event-single-page.html">Concerts</a></li>
									<li><a href="event-single-page.html">Faith</a></li>
									<li><a href="event-single-page.html">Comedy</a></li>
									<li><a href="event-single-page.html">Quiz Nights</a></li>
									<li><a href="event-single-page.html">Upload your Event</a></li>
								</ul>
							</li>
							<!-- <li class="down"><a href="#">Offers</a></li> -->
							<li class="down nav-new-head"><a href="venue.html">Venues</a>
								<ul class="sub-menu">
									<li><a href="venue-single-page.html">Cultural Hall</a></li>
									<li><a href="venue-single-page.html">Popina</a></li>
									<li><a href="venue-single-page.html">Dilmun Club</a></li>
									
								</ul>
							</li>
							<li class="nav-new-head"><a href="photos.html">Gallery</a></li>
							<li class="nav-new-head"><a href="{{ url('magazine') }}">Magazine</a>
								<ul class="sub-menu">
									<li><a href="magazine-single-page.html">The Latest Issue</a></li>
									<li><a href="magazine-single-page.html">Catalogue of Issues</a></li>
								</ul>
							</li>
							<li class="down nav-new-head"><a href="#">Updates</a>
								<ul class="sub-menu">
									<li><a href="#">News to Bahrain</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Webstories</a></li>
									
								</ul>
							</li>
							<li class="down nav-new-head"><a href="digital-edition.html">Digital Edition</a></li>
							
								<!--<ul class="sub-menu">
									<li><a href="venue-single-page.html">Cultural Hall</a></li>
									<li><a href="venue-single-page.html">Popina</a></li>
									<li><a href="venue-single-page.html">Dilmun Club</a></li>
									
								</ul>
							
							<li class="down"><a href="dining.html">Dining<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="dining-single-page.html">Cheap Eats</a></li>
									<li><a href="dining-single-page.html">Fine Dinning</a></li>
									<li><a href="dining-single-page.html">Casual Dinning</a></li>
									<li><a href="dining-single-page.html">Food trucks and Street Food</a></li>
									<li><a href="dining-single-page.html">Cocktails and Bars</a></li>
									<li><a href="dining-single-page.html">Terrace and Outdoor</a></li>
									<li><a href="dining-single-page.html">Waterfront</a></li>
								</ul>
							</li>
							<li class="down"><a href="nightlife.html">Nightlife<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="nightlife-single-page.html">Bar and Lounge</a></li>
									<li><a href="nightlife-single-page.html">Parties</a></li>
									<li><a href="nightlife-single-page.html">Dance Nights</a></li>
									<li><a href="nightlife-single-page.html">Ladies Nights</a></li>
								</ul>
							</li>
							<li><a href="newtobahrain.html">New to Bahrain<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="newtobahrain-single-page.html">Places to Eat</a></li>
									<li><a href="newtobahrain-single-page.html">Places to See</a></li>
									<li><a href="newtobahrain-single-page.html">Fun things to do</a></li>
									<li><a href="newtobahrain-single-page.html">Historical Appraisal</a></li>
									<li><a href="newtobahrain-single-page.html">Relaxation</a></li>
								</ul>
							</li>
							<li><a href="#">Contact</a></li>-->
						</ul>	
                    </div>
                </div>
            </div>
        </div>


        <div class="extra-nav extra-new-nav mobnav-social">
                <div class="extra-cell">
	               	<ul class="list-inline m-a0 footericon-new">
						<li class="iconlist-fb"><a href="#" target="_blank"><i class="fa fa-facebook-f icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-linkedin-in icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-youtube-play icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-twitter icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-whatsapp icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-pinterest-p icon-topbar"></i></a></li>
						<li class="iconlist"><a href="#" target="_blank"><i class="fa fa-instagram icon-topbar"></i></a></li>
					</ul>
	                <a href="signin.html" class="site-button-link sign_btn-new"><i class="fa fa-user"></i> &nbsp; Login</a>
					<a href="signin.html" class="site-button-link sign_btn-new"><i class="ti-import m-r5 rotate90"></i> &nbsp;Sign Up</a>
                </div>
            </div>
    
        <!-- main header END -->


    </header>
    <!-- header END -->
	<div class="page-content bg-white">
    <div class="bannerbg-section">
		<div class="slideshow-container">
		    <div class="mySlides-banner">
		        <img src="{{ asset('assets/frond/images/featured/new-banner.jpg') }}">
		    </div>
		    <div class="mySlides-banner">
		        <img src="{{ asset('assets/frond/images/featured/banner1.jpg') }}">
		    </div>
		    <div class="mySlides-banner">
		        <img src="{{ asset('assets/frond/images/featured/banner.jpg') }}">
		    </div>
		</div>
		<div style="text-align:center">
		    <span class="dot-banner homedot" onclick="currentSlide(1)"></span> 
		    <span class="dot-banner homedot" onclick="currentSlide(2)"></span> 
		    <span class="dot-banner homedot" onclick="currentSlide(3)"></span> 
		</div>
	</div>

	<div class="storysec">
		<div class="container">
	       <div class="row">
	           <div class="col-lg-12 col-md-12 col-sm-12 ml-auto mr-auto">
	                <div class="story-container">
	                    <div class="story-inner">
	                    
	                        <div class="story-bubbles">
	                            <div class="bubbles">
									<?php
								$venues = DB::table('venues')
								->orderBy('id', 'asc')->get(); 
								?> 
								@foreach($venues as $venue)
	                                <div class="bubble" data-post-id="1" data-post-title="Bag" data-post-reed="0" data-post-order="0">
	                                    <a href="#">
	                                        <div class="thumb">
	                                            <img src="{{ $venue->top_image }}" alt="">
	                                        </div>
	                                        <div class="text">
	                                            <span>{{substr($venue->name,0,7)}} ...</span>
	                                        </div>
	                                    </a>
	                                </div>
	                             @endforeach   
	                            </div>
	                            
	                        </div>

	                    </div>
	                </div>
	           </div>
	       </div> 
	    </div>
	</div>