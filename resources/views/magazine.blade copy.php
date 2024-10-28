@include('header')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle mob-view-breadcrumb" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <!-- <h1 class="text-white">Magazine</h1> -->
					<!-- <p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Magazine</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		
		
		<!-- Our Portfolio -->
			<div class="section-full content-inner ">
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


					<div class="section-head text-center">
						<h2 class="box-title">Latest Magazine</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div id="owl-demo" class="testimonial-one owl-loaded owl-theme owl-carousel owl-btn-center-lr owl-btn-3 owl-dots-primary-big">
								@foreach($latest as $last)	
								<div class="item">
										<div class="client-box">
											
												<div class="client-img">
													<a href="magazine-single-page.html"><img src="{{url($last->fimage)}}" width="100" height="100" alt=""></a>
												</div>
												
											
											
										</div>
									</div>
									@endforeach
									<!--<div class="item">
										<div class="client-box">
											<div class="client-img">
													<a href="magazine-single-page.html"><img src="images/featured/magazine2.jpg" width="100" height="100" alt=""></a>
												</div>
										</div>
									</div>
									<div class="item">
										<div class="client-box">
											<div class="client-img">
													<a href="magazine-single-page.html"><img src="images/featured/magazine3.jpg" width="100" height="100" alt=""></a>
												</div>
										</div>
									</div>-->
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- Our Portfolio END -->
			
			
			<!-- Featured Destinations -->
            <div class="section-full  bg-gray-1 content-inner owl-out">
                <div class="container">
					<div class="section-head text-black text-center">
						<h2 class="box-title">Featured Posts</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
                    <div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-2 primary">
						@foreach($featured as $fe)
					<div class="item">
							<div class="blog-post style2 blog-grid">
								<div class="dlab-post-media"> 
									<a href="magazine-single-page.html"><img src="{{url($fe->fimage)}}" alt=""></a> 
								</div>
								<div class="dlab-info">
									<div class="dlab-post-meta">
										<ul>
											
											<li class="post-date"><i class="icon-calendar"></i> <span>{{date('D, d F Y',strtotime($fe->bdate))}}  Tue, 04 April 2023</span> </li>
										</ul>
									</div>
									<div class="dlab-post-title">
										<h5 class="post-title"><a href="magazine-single-page.html">{{$fe->title}}</a></h5>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
                </div>
            </div>
			<!-- Featured Destinations End -->
			
			
			
			
			
		
        <!-- Featured Destinations -->
        <div class="section-full content-inner owl-out">
            <div class="container">
					<div class="section-head text-black text-center">
						<h2 class="box-title">Magazine Updates</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
                <div class="blog-carousel owl-carousel owl-btn-2 primary owl-btn-center-lr">
					@foreach($magazines as $magazine)	
					<div class="item">
							<div class="blog-post dez-blog">
								<div class="dlab-post-media"> 
									<a href="magazine-single-page.html"><img src="images/blog/grid/pic1.jpg" alt=""/></a> 
								</div>
								<div class="dlab-info">
									<div class="category-tag">
										<a href="magazine-single-page.html">Interviews</a>
									</div>
									<div class="dlab-post-title ">
										<h5 class="post-title"><a href="magazine-single-page.html">Bahrain and Bangladesh: A Long...</a></h5>
									</div>
									<div class="dlab-post-text">
									   <p>The Kingdom of Bahrain has a very significant expatriate population; of this demographic, </p>
									</div>
									<div class="dlab-post-meta">
										<ul>
											
											<li class="post-comment"><i class="icon-calendar calendericon"></i> <a href="#">Sun, 05 Feb 2023</a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						
						
						
						
					
					@endforeach
                </div>
            </div>
		</div>
			<!-- Featured Destinations End -->
			
			
    </div>
    <!-- Content END-->
	@include('footer')