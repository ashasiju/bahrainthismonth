
@include('header')
<!-- Content -->
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle mob-view-breadcrumb" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <!-- <h1 class="text-white">Event Details</h1> -->
					<!-- <p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Events</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
<?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>	
@foreach($event as $sevent)	
@endforeach	
		
				
		
	
						<div class="container pt-3">
							
                            <div class="dlab-post-title text-center">
                                <h2 class="post-title m-t0">
									<a href="#" class="eventsingle-title">{{$sevent->title}}</a>
								</h2>
                            </div>
							<div class="dlab-post-meta m-b10">
                                <ul class="d-flex align-items-center timecalendar">
                                    <li class="post-author author1 event-singlelist"><i class="ti ti-calendar"></i> <a href="#">{{date('D',strtotime($sevent->start_date))}} <span class="numfont">{{date('j',strtotime($sevent->start_date))}}</span>{{date('S F',strtotime($sevent->start_date))}} <span class="numfont">{{date('Y',strtotime($sevent->start_date))}}</span></a> </li>
                                    <li class="post-comment comment1 event-singlelist"><i class="ti ti-alarm-clock"></i> <a href="#">{{$sevent->start_time}} - {{$sevent->end_time}}</a> </li><li class="post-comment comment1 event-singlelist"><i class="fa fa-map-marker"></i> <a href="venue.html">{{$sevent->venue}}</a></li>
                                </ul>
                            </div>
							
							<div class="container text-center">	
								<div id="timer">
								</div>		
							</div>
							
							<div class="dlab-post-media m-b50 pt-3">  

								<a href="#"><img src="images/featured/eventsinglebanner1.jpg" alt="" width="100%" height="300px">

								</a>

								<h4 class="title category-singlesec">{{$sevent->subcategory_name}}</h4>
							</div>
							
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
        <div class="section-full listing-details-content mobview-sidebar">
            <div class="container">
				<div class="row sp20">
					<!-- Left part start -->
					<div class="col-xl-8 col-lg-7 col-md-12">
						<!-- Comment Review -->
						
							<!--<div class="dlab-post-title pb-3">
                                <h2 class="headh2"><a href="#" class="event-detailhead">Limited Seating and Free Entrance</a>
								</h2>
                            </div>-->

                            <div class="dropdown dropdown-btn btnevent-single button-single">
								
								
								<button class="addto_calendar_btn site-button dropdown-toggle btn-txtdropdwn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="la la-calendar m-r5 singlepage-icon"></i>  Add to Calendar
								</button>
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
	
		
		?>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item site-button-link facebook" href="">
										<i class="fa fa-google"></i><span>Google Calendar</span></a>
									<a class="dropdown-item site-button-link twitter" href="{{$yahoo_link}}">
										<i class="fa fa-yahoo"></i><span> Yahoo calendar</span></a>
									<a class="dropdown-item site-button-link google-plus" href="{{$outlook_link}}">
										<i class="la la-envelope"></i><span> Outlook Calendar</span></a>
								</div>
								
							</div>	
							
							<div class="dropdown dropdown-btn btnevent-single">
								
								
								<button class="share_btn_sec site-button dropdown-toggle btn-txtdropdwn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="la la-share-square-o m-r5 singlepage-icon"></i> Share
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item site-button-link facebook fb_share" href="#">
										<i class="fa fa-facebook"></i><span>Facebook</span></a>
									<a class="dropdown-item site-button-link twitter tw_share" href="#">
										<i class="fa fa-twitter"></i><span> Twitter</span></a>
									<a class="dropdown-item site-button-link google-plus google_share" href="#">
										<i class="fa fa-google-plus"></i><span> Google+</span></a>
									<a class="dropdown-item site-button-link google-plus lin_share" href="#">
										<i class="fa fa-linkedin"></i><span> Linkedin</span></a>	
								</div>
								
							</div>	

							<div class="dropdown dropdown-btn btnevent-single">
								
								
								<button class="print_btn_sec site-button dropdown-toggle btn-txtdropdwn print_event" type="button">
									<i class="la la-fax singlepage-icon"></i> Print
								</button>

							</div>
							
							<div class="content-body pb-4">
							<div class="box-greysec">
								<p><span class="summaryaboutheadsec">Event Details</span></p>
							
                                <p class="font-weight-400">{{$sevent->description}}</p>
								<p><i class="fa fa-globe webicon"></i> <a href="#">&nbsp; {{$sevent->website}}</a></p>
							
							</div>
							</div>
							
							
							
							<div class="content-body">
							<div class="box-greysec">
							<p><span class="summaryaboutheadsec">Event Summary</span></p>
								<p class="summarysec1">Date <span class="summarydetails1">: &nbsp; &nbsp; <span class="numfont">{{date('d',strtotime($sevent->start_date))}}</span> {{date('F',strtotime($sevent->start_date))}} <span class="numfont">{{date('Y',strtotime($sevent->start_date))}}</span> - <span class="numfont">{{date('d',strtotime($sevent->end_date))}}</span> {{date('F',strtotime($sevent->end_date))}} <span class="numfont">{{date('Y',strtotime($sevent->end_date))}}</span></span></p>
								<p class="summarysec1">Time <span class="summarydetails2">: &nbsp; &nbsp; {{$sevent->start_time}}8:00 PM to {{$sevent->end_time}} 9:30 PM</span></p>
								<p class="summarysec1">Admission <span class="summarydetails4">: &nbsp; &nbsp; {{$sevent->admission}}</span></p>
								<p class="summarysec1">Age <span class="summarydetails3">:  &nbsp; &nbsp; Suitable for 8 years & above</span></p>
							</div>	
							</div>

							
							<div class="content-body">
							<div class="box-greysec">
								<p><span class="summaryheadsec">Venue</span></p>
								<p class="summarysec1">Name <span class="venue-detail1">: &nbsp; &nbsp; Cultural Hall</span></p>
								<p class="summarysec1">Address <span class="venue-detail2">: &nbsp; &nbsp; Spain</span></p>
								<p class="summarysec1">Map Link <span class="venue-detail3">: <a href="https://goo.gl/maps/dgM8xhsDemYpWJHa6"> &nbsp; &nbsp; https://goo.gl/maps/dgM8xhsDemYpWJHa6</a></span></p>
								<p class="summarysec1">Contact <span class="venue-detail4"><a href="tel: +973 17 813 777">: &nbsp; &nbsp; +973 17 813 777</span></a></p>
							</div>	
							</div>


							<div class="content-body">
									<p><span class="summaryaboutheadsec">Event Location</span></p>
								<p><i class="fa fa-map-marker locationiconsec"></i> &nbsp; <a href="venue.html">Cultural Hall, Al Fatih Highway, Manama, Bahrain</a></p>
									
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7157.423066776242!2d50.598068000000005!3d26.238561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49a8ab1439ff4f%3A0xce58dcc776fffa14!2sCultural%20Hall!5e0!3m2!1sen!2sus!4v1678960693233!5m2!1sen!2sus" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>


							
							<!--<div class="dlab-post-title ">
                                <h2 class="headh2"><a href="#" class="event-detailhead">Event Summary</a>
								</h2>
                            </div>-->
							
							<!--<h2 class="category-txtstyle">Category :</h2>
								<div class="loading">
								  <span>Entertainment</span>
								</div>
								
							<h2 class="category-txtstyle">Venue :</h2>
								<div class="loading">
								  <span>Cultural Hall</span>
								 </div>	 -->
						
							
							<div class="content-body tagbox-sec1">
								<div class="dlab-post-tags clear">
									<div class="post-tags">
										<a href="#" class="tagbox">#CULTURE EVENTS IN BAHRAIN </a> 
										<a href="#" class="tagbox">#SPRING OF CULTURE <span class="numfont">2023</span> </a>  
										<a href="#" class="tagbox"> #EVENTS IN BAHRAIN</a> 
									</div>
								</div>
								<div class="dlab-post-tags clear">
									<div class="post-tags">
										<a href="#" class="tagbox"> #SPRING OF CULTURE  <span class="numfont">2023</span> EVENTS</a>
										
										<a href="#" class="tagbox"> #CULTURE  <span class="numfont">2020-2023</span></a> 
									</div>
								</div>
							</div>	
							
							<div class="content-body btnbrochure">
								<button class="site-button radius-xl">Download Brochure</button>
							</div>


							<div class="content-body">
								<p><span class="summaryaboutheadsec">Gallery Images</span></p>
							<div class="row">
								<div class="col-lg-4 col-md-12 col-sm-6 m-b30">
									
										<div class="listing-media">
											<a href="photos.html"><img src="images/listing/gallery-img-1.jpg" alt=""></a>
										</div>
										
										
								
								</div>
							<div class="col-lg-4 col-md-12 col-sm-6 m-b30">
								
										<div class="listing-media">
											<a href="photos.html"><img src="images/listing/gallery-img-2.jpg" alt=""></a>
										</div>
										
										
									
								</div>
								<div class="col-lg-4 col-md-12 col-sm-6 m-b30">
									
										<div class="listing-media">
											<a href="photos.html"><img src="images/listing/gallery-img-3.jpg" alt=""></a>
										</div>
									
										
									
								</div>

								<div class="content-body gallery-viewmore-btn">
									<button class="site-button radius-xl"><a href="photos-single-page.html" class="gallery-viewbtn">View in Gallery</a></button>
								</div>

							</div>
							</div>



					</div>
					<!-- blog END -->
					<!-- Side bar start -->
					<div class="col-xl-4 col-lg-5 col-md-12 sticky-top p-b30">
						<aside class="side-bar listing-side-bar mob-event-box">
						
						
							<div class="content-box">
								<div class="content-header header-secbox">
									<h3 class="registratntxt">Admission</h3>
								</div>
								<div class="content-body">
									<div class="widget widget_map">
										<span class="tenthousandamnt">PAID ENTRY</span>
										<ul class="m-b2">
											<li class="amount-num"><span class="amountred">$ 5,000</span></li>
											<!-- <li class="amount-num"><span class="amountred">$ 5,000</span> / <span class="tenthousandamnt"><del>$ 10,000</del></span></li> -->
										</ul>
										<a href="signin.html" class="site-button button-md radius-xl registeramount-btn">Register Now</a>
									</div>
								</div>
							</div>
							
							<div class="content-box whtsappbox">							
								<div class="content-body">
									<ul class="icon-box-list">
										<li><a href="https://wa.me/97338171541?text=Hello!%20Bahrain%20This%20Month. Send from <?php echo $actual_link; ?>" target="_blank" class="icon-box-info">
											<div class="icon-cell bg-gray">
												<i class="la la-whatsapp icon-whtsapp"></i>
											</div>
											<span class="whtsapptxt">WHAT CAN WE HELP YOU WITH ?</span>
											<span class="whtsappclicktxt">Click Here for Support</span>
										</a></li>
									</ul>
								</div>
							</div>
							
							<div class="content-box">
								<div class="content-header">
									<h3 class="title">Organizer Details</h3>
								</div>
								<div class="content-body">
									<p><span class="summarysec">Name:</span>
									<br>Bahrain Authority for Culture and Antiquities</p>
									<p><span class="summarysec">Company Name:</span>
									<br>Bahrain Authority for Culture and Antiquities</p>
									<ul class="icon-box-list">
										<li><a href="#" class="icon-box-info">
											<div class="icon-cell bg-icon">
												<i class="la la-globe"></i>
											</div>
											<span class="side-link">culture.gov.bh</span>
										</a></li>
										<li><a href="tel:17298777" class="icon-box-info">
											<div class="icon-cell bg-icon">
												<i class="la la-mobile"></i>
											</div>
											<span>17298777</span>
										</a></li>
										<li><a href="tel:17298777" class="icon-box-info">
											<div class="icon-cell bg-icon">
												<i class="la la-phone"></i>
											</div>
											<span>17298777</span>
										</a></li>										
										
									</ul>
								</div>
							</div>
							
							<div class="content-box">
								<div class="content-header">
									<h3 class="title">Comments</h3>
								</div>
								<div class="content-body">
									<!-- Form -->
													<div class="fb-comments" data-href="http://bahrainthismonth.com/{{$sevent->title}}" data-numposts="5" data-width="100%"></div>

                                   
                                       <!-- <form class="comment-form" id="commentform" method="post" action="#">
											<div class="comment-form-rating">
												<div class="starrr"></div>
												<div class="rating-widget">
													<div class="rating-stars">
														<ul id="stars">
															<li class="star" title="Poor" data-value="1">
																<i class="fa fa-star fa-fw"></i>
															</li>
															<li class="star" title="Fair" data-value="2">
																<i class="fa fa-star fa-fw"></i>
															</li>
															<li class="star" title="Good" data-value="3">
																<i class="fa fa-star fa-fw"></i>
															</li>
															<li class="star" title="Excellent" data-value="4">
																<i class="fa fa-star fa-fw"></i>
															</li>
															<li class="star" title="WOW!!!" data-value="5">
																<i class="fa fa-star fa-fw"></i>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<p class="comment-form-comment">
                                                <textarea name="comment" placeholder="Type your comments...." id="comment"></textarea>
                                            </p>
                                       
                                            
                                            <p class="form-submit">
                                                <input type="submit" value="Post Comment" class="submit site-button" id="submit" name="submit">
                                            </p>
                                        </form>-->
                                    
                                    <!-- Form -->
								</div>
							</div>
							
						</aside>
					</div>
					<!-- Side bar END -->
				</div>
			</div>
        </div>
		<!-- contact area END -->


	<!--	<div class="section-full bg-gray-1 content-inner about-us">
                <div class="container">
					<div class="section-head text-black text-left text-center">
						<h2 class="box-title">Related Events</h2>
						<div class="dlab-separator bg-primary"></div>
						
					</div>


					<div class="row">
								<div class="col-lg-4 col-md-12 col-sm-6 m-b30">
									<div class="listing-bx overlap">
										<div class="listing-media">
											<img src="images/listing/gallery-img-1.jpg" alt="">
										</div>
										<div class="listing-info">
											
											<h3 class="title gallery-title"><a href="photos-single-page.html">Al Areen Iftar 2023</a></h3>
											<ul class="featured-category">
												
												<li class="photo-calendarsec"><i class="icon-calendar calendericon"></i> Wed, 29 March 2023</li>
											</ul>	
										</div>
										
									</div>
							</div>
							<div class="col-lg-4 col-md-12 col-sm-6 m-b30">
									<div class="listing-bx overlap">
										<div class="listing-media">
											<img src="images/listing/gallery-img-2.jpg" alt="">
										</div>
										<div class="listing-info">
											
											<h3 class="title gallery-title"><a href="photos-single-page.html">Asry 'Circle of Success' Ceremony</a></h3>
											<ul class="featured-category">
											
												<li class="photo-calendarsec"><i class="icon-calendar calendericon"></i> Wed, 29 March 2023</li>
											</ul>	
										</div>
										
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-sm-6 m-b30">
									<div class="listing-bx overlap">
										<div class="listing-media">
											<img src="images/listing/gallery-img-3.jpg" alt="">
										</div>
										<div class="listing-info">
											
											<h3 class="title gallery-title"><a href="photos-single-page.html">stc Bahrain Annual Ghabga 2023</a></h3>
											<ul class="featured-category">
											
												<li class="photo-calendarsec"><i class="icon-calendar calendericon"></i> Wed, 29 March 20232</li>
											</ul>	
										</div>
										
									</div>
								</div>

							</div>


				</div>
		</div>	-->		




		
		
		<!-- Our Services -->
			<div class="section-full bg-gray-1 content-inner about-us">
                <div class="container">
					<div class="section-head text-black text-left text-center">
						<h2 class="box-title">Related Events</h2>
						<div class="dlab-separator bg-primary"></div>
						
					</div>
					
					<div class="clearfix">
						<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery row sp10">
							<li class="near-by-you design card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic1.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="#"><i class="fa fa-heart"></i></a></li>					
										</ul>
										<ul class="featured-star category_tab">
											
											<a href="#" class="category_txt">Dining</a>
											
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="#">Folklore Festival</a></h3>
										<p>This festival is a perfect opportunity to learn about Bahrain’s rich history...</p>
										<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
										<ul class="place-info ">
											<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
											<li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
										<ul class="place-info mob-view-arrow">
											
											<li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
								</div>
							</li>
							<li class="latest-listings design card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic2.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>					
										</ul>
										<ul class="featured-star category_tab">
											
											<a href="#" class="category_txt">Exhibition</a>
											
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="#">Folklore Festival</a></h3>
										<p>This festival is a perfect opportunity to learn about Bahrain’s rich history...</p>
										<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sat, 08 jan 2023</span> </h6>
										<ul class="place-info ">
											<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Bin Matar House</a></li>
											<li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
										<ul class="place-info mob-view-arrow">
											
											<li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
								</div>
							</li>
							<li class="popular-ratings design card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic3.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>					
										</ul>
										<ul class="featured-star category_tab">
											
											<a href="#" class="category_txt">Entertainment</a>
											
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="#">Abdulrahim Sharif</a></h3>
										<p>Abdulrahim Sharif separates the literal notion of who he is as a person...</p>
										<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
										<ul class="place-info ">
											<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue"> Manama</a></li>
											<li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
										<ul class="place-info mob-view-arrow">
											
											<li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
								</div>
							</li>
							<li class="popular-ratings design card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2">
									<div class="listing-media">
										<img src="images/listing/list2/pic4.jpg" alt="">
										<ul class="wish-bx">
											<li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>					
										</ul>
										<ul class="featured-star category_tab">
											
											<a href="#" class="category_txt">Culture</a>
											
										</ul>
									</div>
									<div class="listing-info">
										<h3 class="title"><a href="#">Beyond Languages</a></h3>
										<p>Fadwa Ramadan’s trip to Siwa Oasis, Egypt in 2014, has triggered a newfound... </p>
										<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Wed, 12 Feb 2023</span> </h6>
										<ul class="place-info ">
											<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Retro Lounge</a></li>
											<li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
										<ul class="place-info mob-view-arrow">
											
											<li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
								</div>
							</li>
							 
						</ul>
					</div>
				</div>
				
				<a href="event-list-page.php"><button class="site-button text-uppercase radius-xl align-self-center allviewmore">View More</button></a>
				
			</div>
            <!-- Our Services -->
		
		
		
		
		
		
		
		
		
		
    </div>
    <!-- Content END-->

	@include('footer')
	<script type="text/javascript">
	$(document).on('click','.fb_share',function(){
	
	
	window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+encodeURIComponent(document.title), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
	//window.open("https://www.facebook.com/sharer.php?u=<?php echo @$og_url;?>?title="+title+"&description="+description+"&image="+image);
});
$(document).on('click','.tw_share',function(){
	
	var title = $("#title").val();
	
	window.open("http://twitter.com/share?text="+title+"&url=<?php echo @$og_url;?>");
	
});
$(document).on('click','.google_share',function(){
	
	window.open("https://plus.google.com/share?url=<?php echo @$og_url;?>");
	
});
$(document).on('click','.lin_share',function(){
	var title = $("#title").val();
	
	window.open("http://www.linkedin.com/shareArticle?mini=true&url=<?php echo @$og_url;?>&title="+title+"&source=https://www.bahrainthismonth.com");
	
});
$(document).on('click','.print_event',function(e){
	e.preventDefault();
	window.print();
	
});
</script>