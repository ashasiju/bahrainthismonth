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
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/plugins/calendar/calendar.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/templete.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/skin/skin-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frond/css/star-rating-svg.css') }}">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	
</head>
<body id="bg">

<div class="page-wraper">
	<!-- header -->
    <header class="site-header header-transparent mo-left">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.php" class="logo-1"><img src="images/logo-white-new.png" alt=""></a>
						<a href="index.php" class="logo-2"><img src="images/logo-black-new.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="{{url('signin')}}" class="site-button-link sign_btn"> Sign In</a>
							<a href="addevent.html" class="site-button radius-xl m-l10 navbar_btn"><i class="fa fa-plus m-r5"></i> Add Events</a>
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">              
							
							<li class="down"><a href="{{url('/events')}}">Events<i class="fa fa-chevron-down"></i></a>
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
							<li class="down"><a href="{{url('/venues')}}">Venue<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
								<?php
								$venues = DB::table('venues')
                
                ->orderBy('id', 'desc')->get();
				?>
				@foreach($venues as $venue)
				<li><a href="{{url('/venue/'.$venue->regtime)}}">{{$venue->name}}</a></li>
									<!--<li><a href="venue-single-page.html">Cultural Hall</a></li>
									<li><a href="venue-single-page.html">Popina</a></li>
									<li><a href="venue-single-page.html">Dilmun Club</a></li>-->
									@endforeach
								</ul>
							</li>
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
							<li><a href="{{url('magazine')}}">Magazine<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="magazine-single-page.html">The Latest Issue</a></li>
									<li><a href="magazine-single-page.html">Catalogue of Issues</a></li>
								</ul>
							</li>
							
							<li><a href="photos.html">Gallery</a></li>
						
							<!--<li><a href="#">Contact</a></li>-->
						</ul>		
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    