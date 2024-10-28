@include('header')
@foreach($event as $sevent)	
@endforeach	
<?php

$venue_name=App\Models\venue::venuefinder($sevent->venue);
//echo "jun 12, 2022 01:30:00";
$dateString = $sevent->start_date.' '.$sevent->start_time;

// Example PHP date string - this could be dynamic based on your logic
//$dateString = "13/11/2024 09:00";

// Create a DateTime object from the input string
$date = DateTime::createFromFormat('d/m/Y H:i', $dateString);

// Check if the DateTime object was created successfully
if ($date) {
    // Convert the date to the desired JavaScript-compatible format
    $formattedDate = $date->format('M d, Y H:i:s');
} else {
    // Handle the case when the input format doesn't match
    $formattedDate = "Invalid date format.";
}
?>

        <!-- inner page banner -->
        <div class="breadcrumb">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
					<div class="row-breadcrumb">
						<ul class="list-inline">
							<li><a href="index.php" class="breadcrumb-names mobname-brdcmb">Home <i class="fa fa-chevron-right arrowbreadcrumb"></i></a></li>
							<li><a href="index.php" class="breadcrumb-names mobname-brdcmb">Events <i class="fa fa-chevron-right arrowbreadcrumb"></i></a></li>
							<li><a href="index.php" class="breadcrumb-names mobname-brdcmb">{{$sevent->subcategory_name}}<i class="fa fa-chevron-right arrowbreadcrumb"></i></a></li>
							<li class="mobname-brdcmb">{{$sevent->title}}</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
		
		
		
				
		
	
						<div class="container pt-3">
							
                            <div class="dlab-post-title text-center">
                                <h2 class="post-title m-t0 eventhead-new">
									<a href="#" class="eventsingle-title"><div class="line-seperator-event mob-eventsingle-line"></div> {{$sevent->title}} <div class="line-seperator-event mob-eventsingle-line"></div></a>
								</h2>
                            </div>
							<div class="dlab-post-meta m-b10">
                                <ul class="d-flex align-items-center timecalendar">
                                    <li class="post-author author1 event-singlelist"><i class="ti ti-calendar"></i> <a href="#"> {{ \DateTime::createFromFormat('d/m/Y', $sevent->start_date)->format('D') }}<span class="numfont"> {{ \DateTime::createFromFormat('d/m/Y', $sevent->start_date)->format('j') }}</span> {{ \DateTime::createFromFormat('d/m/Y', $sevent->start_date)->format('S M') }}<span class="numfont"> {{ \DateTime::createFromFormat('d/m/Y', $sevent->start_date)->format('Y') }}</span></a> </li>
                                    <li class="post-comment comment1 event-singlelist"><i class="ti ti-alarm-clock"></i> <a href="#">{{$sevent->start_time}} - {{$sevent->end_time}}</a> </li><li class="post-comment comment1 event-singlelist"><i class="fa fa-map-marker"></i> <a href="venue.html">{{$venue_name}}</a></li>
                                </ul>
                            </div>
							
							<div class="container text-center">	
								<div id="timer">
								</div>		
							</div>
							
							<!--<div class="dlab-post-media m-b50 pt-3">  

								<a href="#"><img src="images/featured/eventsinglebanner1.jpg" alt="" width="100%" height="300px">

								</a>

								<h4 class="title category-singlesec">Entertainment</h4>
							</div>-->
							
						</div>

		
		
		<!-- Modal -->
		<div class="modal fade modal-bx-info" id="favorite" tabindex="-1" role="dialog" aria-labelledby="FavoriteModalLongTitle" aria-hidden="true">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="FavoriteModalLongTitle"><i class="la la-unlock"></i>LOGIN</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="la la-close"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="tab-content nav">
							<div id="login" class="tab-pane active">
								<form class="dlab-form">
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Username or Email Address" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control " placeholder="Type Password" type="password"/>
									</div>
									<div class="form-group field-btn text-left">
										<div class="input-block">
											<input id="check1" type="checkbox">
											<label for="check1">Remember me</label>
										</div>
										<a data-toggle="tab" href="#forgot-password" class="btn-link forgot-password"> Forgot Password</a>
									</div>
									<div class="form-group">
										<button class="site-button btn-block button-md">login</button>
									</div>
									<div class="form-group">
										<p class="info-bottom">Don’t have an account? <a data-toggle="tab" href="#register" class="btn-link">Register</a> </p>
									</div>
									<div class="text-center">
										<a href="#" class="site-button facebook button-md btn-block"><i class="fa fa-facebook-official m-r10"></i> Log in with Facebook</a>
									</div>
								</form>
							</div>
							<div id="forgot-password" class="tab-pane fade">
								<form class="dlab-form">
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
									</div>
									<div class="form-group"> 
										<button class="site-button btn-block button-md">Get New Password</button>
									</div>
									<div class="form-group">
										<p class="info-bottom">
											<a data-toggle="tab" href="#login" class="btn-link">Login </a> | 
											<a data-toggle="tab" href="#register" class="btn-link">Register</a> 
										</p>
									</div>
									<div class="text-center">
										<a href="#" class="site-button facebook button-md btn-block"><i class="fa fa-facebook-official m-r10"></i> Log in with Facebook</a>
									</div>
								</form>
							</div>
							<div id="register" class="tab-pane fade">
								<form class="dlab-form">
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Full Name" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Address" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="City/Town" type="text"/>
									</div>
									<h6 class="text-inherit m-b10">Enter your account details below: </h6>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="User Name" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Password" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Re-type Your Password" type="text"/>
									</div>
									<div class="form-group">
										<input type="checkbox" id="privacy-policy">
										<label for="privacy-policy">I agree to the <a href="termsandconditions.html" class="btn-link">Terms of Service </a>& <a href="privacypolicy.html" class="btn-link">Privacy Policy </a></label>
									</div>
									<div class="form-group"> 
										<button class="site-button button-md btn-block">Submit</button>
									</div>
									<div class="form-group">
										<p class="info-bottom">
											<a data-toggle="tab" href="#login" class="btn-link">Login with username and password?</a> 
										</p>
									</div>
									<div class="text-center">
										<a href="#" class="site-button facebook button-md btn-block"><i class="fa fa-facebook-official m-r10"></i> Log in with Facebook</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal End -->
		<!-- Modal -->
		<div class="modal fade modal-bx-info modal-lg" id="report-reviews" tabindex="-1" role="dialog" aria-labelledby="ReportReviewsModalLongTitle" aria-hidden="true">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ReportReviewsModalLongTitle">REPORT ABUSE</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="la la-close"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<form class="dlab-form">
							<div class="clearfix">
								<p>If you think this content inappropriate and should be removed from our website, please let us know by submitting your reason at the form below.</p>
							</div>
							<div class="form-group">
								<input name="dzName" required="" class="form-control" placeholder="Reason" type="password"/>
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Description"></textarea>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<a href="#" class="site-button gray-light">Cancel</a>
						<a href="#" class="site-button">Submit</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal End -->
        <!-- contact area -->
        <div class="section-full listing-details-content mobview-sidebar pt-5">
            <div class="container">
				<div class="row sp20">
					<!-- Left part start -->
					<div class="col-xl-8 col-lg-7 col-md-12">
						<!-- Comment Review -->
						
							<div class="content-box">
								<div class="content-header">
									<h3 class="title">Event Summary</h3>
								</div>
								<div class="content-body">
									<p class="summarysec1">Date <span class="summarydetails1">: &nbsp; &nbsp; <span class="numfont">{{date('d',strtotime($sevent->start_date))}}</span> {{date('F',strtotime($sevent->start_date))}}<span class="numfont"> {{date('Y',strtotime($sevent->start_date))}}</span> - <span class="numfont"> {{date('d',strtotime($sevent->end_date))}}</span>  {{date('F',strtotime($sevent->end_date))}}<span class="numfont"> {{date('Y',strtotime($sevent->end_date))}}</span></span></p>
									<p class="summarysec1">Time <span class="summarydetails2">: &nbsp; &nbsp; {{$sevent->start_time}} to {{$sevent->end_time}}</span></p>
									<p class="summarysec1">Category <span class="summarydetails5">: &nbsp; &nbsp; {{$sevent->subcategory_name}}</span></p>
									<p class="summarysec1">Admission <span class="summarydetails4">: &nbsp; &nbsp; {{$sevent->admission}}</span></p>
									<p class="summarysec1">Venue <span class="summarydetails3">:  &nbsp; &nbsp; {{$venue_name}}</span></p>
								</div>
								<?php
								//$link = $gCal = @GoogleCalendar::createEventReminder($params);
		
		$title = $sevent->title." | Home";
								$start_date=$sevent->start_date .' '.$sevent->start_time;
		$end_date=$sevent->end_date .' '.$sevent->end_time;
		$st=date('Ymd',strtotime($start_date));
		$et=date('Ymd',strtotime($end_date));
		$title=str_replace(' ','+',$sevent->title);
		$description=str_replace(' ','+',substr(strip_tags($sevent->description),0,200));
		
		$yahoo_link="https://calendar.yahoo.com/?v=60&view=d&type=20&title=$title&st=$st&et=$et&desc=$description&in_loc=%0A%0A&uid=";
		
		$event_date=date('Ymd',strtotime($sevent->start_date));
		$event_end_date=date('Ymd',strtotime($sevent->end_date));
		$event_start_time=date("His", strtotime($sevent->start_time));
		$event_end_time=date("His", strtotime($sevent->end_time));
		
		
		$outlook_link='https://www.bahrainthismonth.com/home/event/save_event_to_outlook?date='.date('Ymd',strtotime($event_date)).'&end_date='.date('Ymd',strtotime($event_end_date)).'&startTime='.date("His", strtotime($event_start_time)).'&endTime='.date("His", strtotime($event_end_time)).'&subject='.$sevent->title.'&desc='.$description;
	
		$params = array('title' => strip_tags($sevent->title) ,
		'datetime' => array('start' => $sevent->start_date .' '.$sevent->start_time, 'end' => $sevent->end_date .' '.$sevent->end_time),
		'location' => strip_tags($sevent->location),
		'description' => substr(strip_tags($sevent->description),0,200)
	);
	$eventdate=$sevent->start_date;
	$eventenddate=$sevent->end_date;
	$location=strip_tags($sevent->location);
	$description=strip_tags($sevent->description);
	$link = $gCal = $googleCalendarUrl = "https://www.google.com/calendar/render?action=TEMPLATE&text={$title}&dates={$eventdate}/{$eventenddate}&details={$description}&location={$location}";
	
		?>
								<div class="container box-drop">
									<div class="row">
										<div class="col-lg-4 box-4drop">
											<div class="dropdown dropdown-btn btnevent-single button-single threebtn-box">
												<a class="dropdown-toggle btn-txtdropdwn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="la la-calendar m-r5 singlepage-icon"></i>  Add to Calendar
												</a>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													<a class="dropdown-item site-button-link facebook" href="{{$link}}">
														<i class="fa fa-google"></i><span>Google Calendar</span></a>
													<a class="dropdown-item site-button-link twitter" href="{{$yahoo_link}}">
														<i class="fa fa-yahoo"></i><span> Yahoo calendar</span></a>
													<a class="dropdown-item site-button-link google-plus" href="{{$outlook_link}}">
														<i class="la la-envelope"></i><span> Outlook Calendar</span></a>
												</div>
											</div>	
										</div>

										<div class="col-lg-4 box-4drop">
											<div class="dropdown dropdown-btn btnevent-single threebtn-box">
												<a class="dropdown-toggle btn-txtdropdwn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="la la-share-square-o m-r5 singlepage-icon"></i> Share
												</a>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													<a class="dropdown-item site-button-link facebook fb_share" href="#">
														<i class="fa fa-facebook"></i><span>Facebook</span></a>
													<a class="dropdown-item site-button-link twitter tw_share" href="javascript:void(0);">
														<i class="fa fa-twitter"></i><span> Twitter</span></a>
													<a class="dropdown-item site-button-link google-plus google_share" href="javascript:void(0);">
														<i class="fa fa-google-plus"></i><span> Google+</span></a>
													<a class="dropdown-item site-button-link google-plus lin_share" href="javascript:void(0);">
														<i class="fa fa-linkedin"></i><span> Linkedin</span></a>	
												</div>
											</div>
										</div>

										<div class="col-lg-4">
											<div class="dropdown dropdown-btn btnevent-single threebtn-box">
												<a class="dropdown-toggle btn-txtdropdwn print_event" type="button">
													<i class="la la-fax singlepage-icon"></i> Print
												</a>
											</div>
										</div>
									</div>
								</div>


							</div>

							<div class="content-box">
								<div class="content-header">
									<h3 class="title">Event Details</h3>
								</div>
								<img src="../../{{$sevent->fimage1}}">
								<div class="content-body">

									<p class="font-weight-400">{!!$sevent->description!!}</p>

									<button class="site-button radius-xl singleread">Read More <i class="fa fa-chevron-down dwnarrow"></i></button>

									<div class="hashtag-sec" style="text-transform:uppercase;">
										@foreach($event_tags as $tag)
										<a href="#" class="hashtag-txt">#{{$tag->tag_name}} </a> 
										@endforeach
									</div> 
								</div>
							</div>

					</div>
					<!-- blog END -->
					<!-- Side bar start -->
					<div class="col-xl-4 col-lg-5 col-md-12 sticky-top p-b30">
						<aside class="side-bar listing-side-bar mob-event-box">
						
						
							<div class="content-box">
								<div class="content-header">
									<h3 class="title">Event Location</h3>
								</div>
								<div class="content-body">
									<p><a href="venue.html">Cultural Hall, Al Fatih Highway, Road No 639 Manama, Bahrain</a></p>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7157.423066776242!2d50.598068000000005!3d26.238561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49a8ab1439ff4f%3A0xce58dcc776fffa14!2sCultural%20Hall!5e0!3m2!1sen!2sus!4v1678960693233!5m2!1sen!2sus" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div>
							
							<a href="https://wa.me/{{$sevent->contact_phone}}" target="_blank"><div class="content-box whtsappbox">							
								<div class="content-body">
									<p class="whtsapptxt">WHAT CAN WE HELP YOU WITH ?</p>
									<p class="whtsappclicktxt">Click Here for Support</p>
									<img src="{{ asset('assets/frond/images/featured/whtsap.png') }}" class="whtsap-img-event">
								</div>
							</div></a>
							
							<div class="content-box">
								<div class="content-header">
									<h3 class="title">Organizer Details</h3>
								</div>
								<?php $organizer=App\Models\organizer::getorganizer($sevent->organizer);?>
	@foreach($organizer as $organizers)
								<div class="content-body">
									<p><span class="summarysec">Name:</span>
									<br>{{$organizers->name}}</p>
									<p><span class="summarysec">Company Name:</span>
									<br>{{$organizers->company_name}}</p>
									<p><span class="summarysec">Website:</span>
									<br>{{$organizers->website}}</p>
									<p><span class="summarysec">Telephone No:</span>
									<br>{{$organizers->phoneno}}</p>
									<p><span class="summarysec">Mobile No:</span>
									<br>{{$organizers->mobileno}}</p>
								</div>
								@endforeach
							</div>
							
							<div class="content-box">
								<div class="content-header">
									<h3 class="title">Comments</h3>
								</div>
								<div class="content-body">
									<div class="row">
										<div class="col-lg-5 col-md-5 col-sm-12">
											<p><span class="summarysec">21 Comment</span></p>
										</div>

										<div class="col-lg-7 col-md-7 col-sm-12">
											<div class="icon-box-info">
											<p><span class="summarysec">Sort By
												<div class="form-group formbox">
												<select>
													<option>Newest</option>
													<option>Oldest</option>
												</select>
												</div>
											</span></p>
											</div>
										</div>
									</div>

									<!--<div class="comment-fb"></div>

                                        <form class="comment-form" id="commentform" method="post" action="#">
											<div class="review-comment-author">
												<div class="image-review">
													<img src="{{ asset('assets/frond/images/testimonials/pic1.jpg') }}" alt="">
												</div>
												<div class="comment-info">
													<div class="info-group">
														<p class="comment-form-comment">
                                                			<textarea class="review-txtarea" name="comment" placeholder="Type your comments...." id="comment"></textarea>
                                            			</p>
													</div>
												</div>
											</div>
                                        </form>

										<div class="review-comment-author">
											<div class="review-avatar">
												<img src="images/testimonials/pic1.jpg" alt="">
											</div>
											<div class="comment-info">
												<div class="info-group">
													<h3 class="title"><a href="#">Diamond Anderson</a></h3>
													<p class="comment-text">Kuwait City</p>
													<p class="review-p">Hello, May i Buy two tickets</p>
												</div>
												<span class="comment-date fb-links">Like</span>
												<span class="comment-date fb-links">Reply</span>
												<span class="comment-date">Oct 14, 2025 4:53pm</span>
											</div>
										</div>

										<div class="review-comment-author pt-3">
											<div class="review-avatar">
												<img src="images/testimonials/pic1.jpg" alt="">
											</div>
											<div class="comment-info">
												<div class="info-group">
													<h3 class="title"><a href="#">Diamond Anderson</a></h3>
													<p class="comment-text">Kuwait City</p>
													<p class="review-p">Hello, May i Buy two tickets</p>
												</div>
												<span class="comment-date fb-links">Like</span>
												<span class="comment-date fb-links">Reply</span>
												<span class="comment-date">Oct 14, 2025 4:53pm</span>
											</div>
										</div>

										<div class="review-comment-author pt-3">
											<div class="review-avatar">
												<img src="images/testimonials/pic1.jpg" alt="">
											</div>
											<div class="comment-info">
												<div class="info-group">
													<h3 class="title"><a href="#">Diamond Anderson</a></h3>
													<p class="comment-text">Kuwait City</p>
													<p class="review-p">Hello, May i Buy two tickets</p>
												</div>
												<span class="comment-date fb-links">Like</span>
												<span class="comment-date fb-links">Reply</span>
												<span class="comment-date">Oct 14, 2025 4:53pm</span>
											</div>
										</div>

										<a href="#" class="site-button m-t5 fb-btn">Load 10 more comment</a>
                                    
										<div class="comment-fb-line"></div>

										<p class="fb-txt"><i class="fa fa-facebook-square"></i>&nbsp; Facebook comments plugin</p>
									-->
	                                    <!-- Form -->
										@extends('layouts.app')

@section('title', 'Event Details')

@section('content')
    <!-- Your event details go here -->

    <!-- Facebook comments section -->
    <div class="fb-comments" 
         data-href="{{ url()->current() }}" 
         data-numposts="5" 
         data-width="100%" 
         data-order-by="social"> <!-- Sort options: time, reverse_time, social -->
    </div>
@endsection


									
									</div>
							</div>
							
						</aside>
					</div>
					<!-- Side bar END -->
				</div>
			</div>
        </div>
		<!-- contact area END -->

		
		<!-- Our Services -->
			<section class="">
			<div class="section-full bg-white content-inner about-us">
                <div class="container">
                	<!--<div class="container text-center bannerlatest">
						<a href="#"><img src="images/featured/new-banner.jpg" alt=""></a> 
					</div>-->
					<div class="container text-center banner-magazine">
        <div class="carousel-container2">
          @foreach($bottom_ad as $bad)
            <img src="{{ asset($bad->banner) }}" class="banner-images2" alt="Banner Image 1">
          @endforeach 
            <div class="custom-dot-navigation2"></div> <!-- Unique class name for dots -->
        </div>
    </div>
					<div class="section-head text-black text-center pt-3">
						<h2 class="eventhead-h1"><div class="line-seperator"></div> RELATED EVENTS <div class="line-seperator"></div></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
					<div class="owl-location-carousel owl-carousel owl-btn-2 owl-btn-center-lr eventdiningsec">
					<?php $revents=App\Models\Event::related_events($sevent->category,$sevent->id);?>
	@foreach($revents as $revent)
					<div class="item">
							<div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
								<div class="listing-media">
									<a href="dining-single-page.html"><img src="{{asset($revent->fimage1)}}" class="diningimg-event" alt=""></a>
									<ul class="wish-bx">
										<li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>		
									</ul>
									<ul class="featured-star category_tab">
										<a href="{{url('event/'.$revent->regtime)}}" class="category_txt">{{$revent->subcategory_name}}</a>
									</ul>
								</div>
								<div class="listing-info info1 dining-content-event">
									<h3 class="title pt-3"><a href="{{url('event/'.$revent->regtime)}}" class="diningevent-head">{{substr($revent->title,0,15)}}...</a></h3>
									<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> {{date('D, d M Y',strtotime($revent->start_date))}}</span> </h6>
									<ul class="place-info ">
										<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">{{$revent->location}}</a></li>
										<li class="open arrow_btn lap-view-arrow"><a href="dining-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
									<ul class="place-info mob-view-arrow">
										<li class="open arrow_btn "><a href="{{url('event/'.$revent->regtime)}}" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
<!--
						<div class="item">
							<div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
								<div class="listing-media">
									<a href="dining-single-page.html"><img src="images/featured/dining-img2-event.jpg" class="diningimg-event" alt=""></a>
									<ul class="wish-bx">
										<li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>		
									</ul>
									<ul class="featured-star category_tab">
										<a href="dining-single-page.html" class="category_txt">Concert</a>
									</ul>
								</div>
								<div class="listing-info info1 dining-content-event">
									<h3 class="title pt-3"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
									<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Tue, 18 Feb 2023</span> </h6>
									<ul class="place-info ">
										<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Wagalag</a></li>
										<li class="open arrow_btn lap-view-arrow"><a href="dining-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
									<ul class="place-info mob-view-arrow">
										<li class="open arrow_btn "><a href="dining-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
								<div class="listing-media">
									<a href="dining-single-page.html"><img src="images/featured/dining-img3-event.jpg" class="diningimg-event" alt=""></a>
									<ul class="wish-bx">
										<li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>		
									</ul>
									<ul class="featured-star category_tab">
										<a href="dining-single-page.html" class="category_txt">Concert</a>
									</ul>
								</div>
								<div class="listing-info info1 dining-content-event">
									<h3 class="title pt-3"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
									<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Tue, 18 Feb 2023</span> </h6>
									<ul class="place-info ">
										<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Wagalag</a></li>
										<li class="open arrow_btn lap-view-arrow"><a href="dining-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
									<ul class="place-info mob-view-arrow">
										<li class="open arrow_btn "><a href="dining-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
								<div class="listing-media">
									<a href="dining-single-page.html"><img src="images/featured/dining-img4-event.jpg" class="diningimg-event" alt=""></a>
									<ul class="wish-bx">
										<li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>		
									</ul>
									<ul class="featured-star category_tab">
										<a href="dining-single-page.html" class="category_txt">Concert</a>
									</ul>
								</div>
								<div class="listing-info info1 dining-content-event">
									<h3 class="title pt-3"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
									<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Tue, 18 Feb 2023</span> </h6>
									<ul class="place-info ">
										<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Wagalag</a></li>
										<li class="open arrow_btn lap-view-arrow"><a href="dining-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
									<ul class="place-info mob-view-arrow">
										<li class="open arrow_btn "><a href="dining-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
								<div class="listing-media">
									<a href="dining-single-page.html"><img src="images/featured/dining-img5-event.jpg" class="diningimg-event" alt=""></a>
									<ul class="wish-bx">
										<li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>		
									</ul>
									<ul class="featured-star category_tab">
										<a href="dining-single-page.html" class="category_txt">Concert</a>
									</ul>
								</div>
								<div class="listing-info info1 dining-content-event">
									<h3 class="title pt-3"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
									<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Tue, 18 Feb 2023</span> </h6>
									<ul class="place-info ">
										<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Wagalag</a></li>
										<li class="open arrow_btn lap-view-arrow"><a href="dining-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
									<ul class="place-info mob-view-arrow">
										<li class="open arrow_btn "><a href="dining-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
									-->
					</div>
				</div>
			</div>
		</section>
            <!-- Our Services -->
		
		
		<section class="">
            <div class="section-full bg-white content-inner about-us nightclubevent-area">
                <div class="container">
                    <div class="section-head text-black text-center pt-3">
                        <h2 class="eventhead-h1"><div class="line-seperator"></div> UPCOMING EVENTS <div class="line-seperator"></div></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                    <div class="owl-location-carousel owl-carousel owl-btn-2 owl-btn-center-lr eventdiningsec nightclub-section">
					<?php $uevents=App\Models\Event::upcoming_events($sevent->id);?>
					@foreach($uevents as $uevent)
                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="{{url('event/'.$uevent->regtime)}}"><img src="{{asset($uevent->fimage1)}}" class="diningimg-event" alt=""></a>
                                    <ul class="wish-bx">
                                        <li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>      
                                    </ul>
                                    <ul class="featured-star category_tab">
                                        <a href="{{url('event/'.$uevent->regtime)}}" class="category_txt">{{$uevent->subcategory_name}}</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1 dining-content-event">
                                    <h3 class="title pt-3"><a href="dining-single-page.html" class="diningevent-head">{{substr($uevent->title,0,15)}}...</a></h3>
                                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> {{date('D, d M Y',strtotime($uevent->start_date))}}</span> </h6>
                                    <ul class="place-info ">
                                        <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">{{$uevent->location}}</a></li>
                                        <li class="open arrow_btn lap-view-arrow"><a href="{{url('event/'.$uevent->regtime)}}" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                    <ul class="place-info mob-view-arrow">
                                        <li class="open arrow_btn "><a href="{{url('event/'.$uevent->regtime)}}" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                       @endforeach
                    </div>
                </div>
            </div>
            </section>
		
	
    </div>
    <!-- Content END-->
	@include('footer')
	<script type="text/javascript">
		
 $(document).on('click','.fb_share',function(e){
	alert("hhh");
	e.preventDefault();
	
	window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+encodeURIComponent(document.title), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
	//window.open("https://www.facebook.com/sharer.php?u=<?php echo @$og_url;?>?title="+title+"&description="+description+"&image="+image);
});
$(document).on('click','.tw_share',function(e){
	e.preventDefault();
	var title = $("#title").val();
	
	window.open("http://twitter.com/share?text="+title+"&url=<?php echo @$og_url;?>");
	
});
$(document).on('click','.google_share',function(e){
	e.preventDefault();
	window.open("https://plus.google.com/share?url=<?php echo @$og_url;?>");
	
});
$(document).on('click', '.lin_share', function(e) {
    e.preventDefault();
    
    var title = $("#title").val();
    
    // Get base URL dynamically in Laravel
    var base_url = "{{ url('/') }}";
    var og_url = "{{ $og_url ?? '' }}"; // Ensure og_url is passed from the controller
    
    window.open("http://www.linkedin.com/shareArticle?mini=true&url=" + og_url + "&title=" + title + "&source=" + base_url);
});

	$(document).on('click','.print_event',function(e){
	e.preventDefault();
	window.print();
	
});
</script>

	<script>
		
function updateTimer() {
    //future = Date.parse("jun 12, 2022 01:30:00");
	// Use the PHP-generated date string
    future = Date.parse("<?php echo $formattedDate; ?>");
    if (isNaN(future)) {
        document.getElementById("timer").innerHTML = "Invalid date";
        return;
    }
    now = new Date();
    diff =  future - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;
if(d>=1)
{
    document.getElementById("timer")
        .innerHTML =
        '<div>' + d + '<span>Days</span></div>' +
        '<div>' + h + '<span>Hours</span></div>' +
        '<div>' + m + '<span>Minutes</span></div>' +
        '<div>' + s + '<span>Seconds</span></div>';
}
else
{
	document.getElementById("timer").display =	"none";
}
}
setInterval('updateTimer()', 0);
</script>
<style>
	.print_event
	{
		cursor:pointer;
}
@media print {
  img {
    display: block;
    max-width: 100%;
    height: auto;
  }
  
  /* Ensure background images are included */
  body {
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
  }
  
  /* If you're using any background images */
  .element-with-background-image {
    background-image: url('path-to-your-image');
    background-position: center;
    background-size: cover;
  }
}

  </style>