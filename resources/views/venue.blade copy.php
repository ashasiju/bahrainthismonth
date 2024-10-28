@include('header')
    <!-- inner page banner -->
	<div class="breadcrumb">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
					<div class="row-breadcrumb">
						<ul class="list-inline">
							<li><a href="index.php" class="breadcrumb-names mobname-brdcmb">Home <i class="fa fa-chevron-right arrowbreadcrumb"></i></a></li>
							<li><a href="#" class="breadcrumb-names mobname-brdcmb">Venues <i class="fa fa-chevron-right arrowbreadcrumb"></i></a></li>
							<li class="mobname-brdcmb">All Venues in Bahrain</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
    <!-- header END -->
    <!-- Content -->
    

    				
		
		
		<!-- Featured Destinations -->
            <div class="section-full bg-white content-inner venue-sec owl-out">
                <div class="container">

                	<div class="site-filters clearfix center m-b40 listing-filters">
										<ul class="filters" data-toggle="buttons">
											<li data-filter="" class="btn active">
												<input type="radio">
												<a href="#" class="site-button-link"><span><i class=""></i>All</span></a> 
											</li>
											<li data-filter="latest-listings" class="btn">
												<input type="radio">
												<a href="#" class="site-button-link"><span><i class="la la-thumb-tack"></i> Business</span></a> 
											</li>
											<li data-filter="popular-ratings" class="btn">
												<input type="radio">
												<a href="#" class="site-button-link"><span><i class="la la-star-o"></i> Night Life</span></a> 
											</li>
											<li data-filter="near-by-you" class="btn">
												<input type="radio">
												<a href="#" class="site-button-link"><span><i class="la la-heart-o"></i> Leisure</span></a> 
											</li>
										</ul>
										
									</div>


					<div class="section-head text-black text-center">
						<h2 class="box-title">Venue</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
                   


					<div class="row">
						
						@foreach($venues as $venue)
						<div class="col-lg-3 col-md-6 col-sm-6 venue-mobview-sec">
							<div class="featured-bx m-b30">
								<div class="featured-media">
									<a href="{{url('venue/'.$venue->regtime)}}"><img src="{{asset($venue->top_image)}}" alt=""/></a>
								</div>	
								<div class="featured-info">
									
									<h5 class="title"><a href="{{url('venue/'.$venue->regtime)}}">{{$venue->name}}</a></h5>
									
								</div>
							</div>
						</div>
						@endforeach
					</div>


                </div>
				
				
				<!--	<a href="dining.html"><button class="site-button text-uppercase radius-xl align-self-center allviewmore">View More</button></a>-->
			
				
            </div>
			<!-- Featured Destinations End -->


			<div class="section-full content-inner venue-news-page1">
                <div class="container">
			
					<div class="newbox-greysec">
								<p><span class="dining-in-bahrainhead">Bahrain This Month</span></p>
							
                                <p class="dining-in-bahraintxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet,</p>
							
							</div>

				</div>
			</div>	


		<div class="section-full content-inner bg-gray">
                <div class="container">
					<div class="section-head text-black text-center">
						
						<h2 class="box-title nightlife-head">Frequently Asked Questions</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					
					</div>
					

                	<button class="accordion">Lorem ipsum dolor sit amet ?</button>
						<div class="panel panel-sec">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						</div>

						<button class="accordion">Lorem ipsum dolor sit amet ?</button>
						<div class="panel panel-sec">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						</div>

						<button class="accordion">Lorem ipsum dolor sit amet ?</button>
						<div class="panel panel-sec">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						</div>
                </div>
        </div>  
			
		
			
    </div>
    <!-- Content END-->
	@include('footer')