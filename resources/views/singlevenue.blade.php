
@include('header')
@foreach($venues as $svenue)	
@endforeach
<!-- Content -->
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle mob-view-breadcrumb" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <!-- <h1 class="text-white">Dining</h1> -->
					<!-- <p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Venue Single Page</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		
		
		 <!-- inner page banner END -->
        <div class="section-full content-inner">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
					
							<div class="dlab-post-media m-b50 pt-3">   
								<a href="#"><img src="images/featured/venuesinglebanner1.jpg" alt="" width="100%" height="300px"></a>
								
							</div>
					
                    <div class="col-md-7 col-lg-8 col-xl-8">
					
							<!-- <div class="dlab-post-meta m-b20">
                                <div class="category-tag dining-tag">
									<a href="#" class="diningtag-color">British Club Bahrain</a>
								</div>
                            </div> -->

                            <div class="row">
                            <div class="col-lg-6">
                            <div class="dlab-post-title ">
                                <h2 class="post-title m-t0">
									<a href="#">{{$svenue->name}}</a>
								</h2>
							
								<p class="dining-tagtxt"><a href="{{url('venues')}}" class="all-venue">{{$svenue->location}}</a><span class="btmtxt"></span></p>
                            </div>
							
							<div class="dlab-post-meta m-b20">
                                <p class="dining-tagtxt"><i class="ti-mobile"></i><a href="tel: {{$svenue->telephone}}"> {{$svenue->telephone}}</a></p>
                                <p class="dining-tagtxt"><i class="ti-email"></i><a href="mailto: {{$svenue->website}}"> {{$svenue->website}}</a></p>
                            </div>
							</div>



							<div class="col-lg-6">
								<img src="images/blog/default/venue-inner-logo.png" class="venuelogo" alt="">
							</div>	
							</div>
					
                        <div class="blog-post blog-lg list-blog-bx">

                            <!-- <div class="dlab-post-media dlab-img-effect zoom-slow">
								<a href="blog-details.html"><img src="images/blog/default/venue-inner-img1.jpg" alt=""></a>
							</div> -->
							
                            <div class="dlab-post-info">
                            	<p><span class="summaryaboutheadsec">Venue Details</span></p>
		
                                <div class="dlab-post-text">
                                    <p class="font-weight-400">{{$svenue->description}}</p>
                                </div>
								
								<p>General Manager <br> Daniel McRae</p>

								 <p><span class="summaryaboutheadsec">Venue Location</span></p>

                                <div class="dlab-post-text">
                                    <p class="font-weight-400"><a href="{{url('/venues')}}" class="all-venue">{{$svenue->location}}</a></p>
                                </div>    

                                <div class="dlab-post-media dlab-img-effect zoom-slow">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7159.43017257517!2d50.591576!3d26.205945!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49af2c07babb8d%3A0xcf97d6d139b054d!2sBritish%20Club!5e0!3m2!1sen!2sus!4v1683194497826!5m2!1sen!2sus" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								
								<div class="content-body tagbox-diningsec pt-5">
									<div class="dlab-post-tags clear">
										<div class="post-tags">
											<a href="#" class="tagbox">#British</a>    
											<a href="#" class="tagbox">#british club bahrain</a>  
											<a href="#" class="tagbox">#uk in bahrain</a> 
										</div>
									</div>
									<div class="dlab-post-tags clear">
										<div class="post-tags">
											<a href="#" class="tagbox">#clubs</a>
											<a href="#" class="tagbox">#social club</a>
										</div>
									</div>
								</div>
								
	
                            </div>
							
	
                        </div>
						
                      
                    </div>
                    <!-- Left part END -->


                     







                    <!-- Side bar start -->
                    <div class="col-md-5 col-lg-4 col-xl-4 sticky-top">
                        <aside  class="side-bar blog-sidebar">



                        	<!-- Our Services -->
			<div class="section-full bg-gray-1 content-inner about-us mob-view-venuesingle">
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




							<div class="widget">
                                <h4 class="widget-title pt-5">RELATED VENUE</h4>
                                <div class="item">
							<div class="blog-post style2 blog-grid">
								
								<div class="dlab-post-media"> 
									<a href="venue-single-page.html"><img src="images/blog/grid/venue1.jpg" alt=""></a> 
								</div>
							
									<!--<h4 class="title image_pagesec">Buy Tickets</h4>-->
							
								<div class="dlab-info">
									<div class="dlab-post-meta">
									<h5 class="post-title"><a href="venue-single-page.html">Cultural Hall</a></h5>
										<ul>	
											
											<li class="post-comment"><i class="icon-calendar"></i> <a href="#"> Tue, 07 Feb 2023</a> </li>
											
										</ul>
										
									</div>
									
								</div>
							</div>
							

							
						</div>
								
								<div class="item">
							<div class="blog-post style2 blog-grid">
								<div class="dlab-post-media"> 
									<a href="venue-single-page.html"><img src="images/blog/grid/venue2.jpg" alt=""></a> 
								</div>
								
								
								<div class="dlab-info">
									<div class="dlab-post-meta">
									<h5 class="post-title"><a href="venue-single-page.html">Popina</a></h5>
										<ul>
											
											<li class="post-comment"><i class="icon-calendar"></i> <a href="#"> Mon, 08 jan 2023</a> </li>
										</ul>	
										
									</div>
								</div>
							</div>
						</div>
								
								<div class="item">
							<div class="blog-post style2 blog-grid">
								<div class="dlab-post-media"> 
									<a href="venue-single-page.html"><img src="{{asset('assets/'.$svenue->top_image)}}" alt=""></a> 
								</div>
								
								<div class="dlab-info">
									<div class="dlab-post-meta">
									<h5 class="post-title"><a href="venue-single-page.html">Dilmun Club</a></h5>
										<ul>
										
											<li class="post-comment"><i class="icon-calendar"></i> <a href="#"> Wed, 09 Feb 2023</a> </li>
										</ul>	
										
									</div>
								</div>
							</div>
						</div>
								
							</div>
							
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>


        <!-- Our Services -->
			<div class="section-full bg-gray-1 content-inner about-us mobview-nonesec">
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