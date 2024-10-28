@include('header')




<!-- LAPTOP SLIDER -->
  <section class="laptop" style="background:#000">
    <div class="container">
      <div class="row slider-row">
        <div class="col-lg-5 col-md-5 col-sm-12">
		<?php $hevents1=App\Models\Event::home_events1();?>
		@foreach($hevents1 as $hevent1)
          <img src="{{asset($hevent1->fimage1)}}" class="gridimg1" alt="">
          <div class="update-heading-title1">
            <h1 id="title" class="">{{$hevent1->title}}</h1>
            <p id="description">{!!substr($hevent1->description,0,125)!!}...</p>
          </div>
		  @endforeach
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="row grid-row">
            <!-- <div class="col-lg-12 col-md-12 col-sm-12"> -->
			<?php $hevents2=App\Models\Event::home_events2();?>
			@foreach($hevents2 as $hevent2)
              <img src="{{asset($hevent2->fimage1)}}" class="gridimg2" alt="">
              <div class="update-heading-title2">
                <h1 id="title" class="">{{$hevent2->title}}</h1>
                <!-- <p id="description">Camelot Restaurant and Lounge, located in Adliya’s Block 338, is known for its enchanting ambiance and sophisticated culinary off...</p> -->
              </div>
			  @endforeach
            <!-- </div>
            <div class="col-lg-12 col-md-12 col-sm-12 grid3sec"> -->
			<?php $hevents3=App\Models\Event::home_events3();?>
			@foreach($hevents3 as $hevent3)
			<img src="{{asset($hevent3->fimage1)}}" class="gridimg2" alt="">
              <div class="update-heading-title3">
                <h1 id="title" class="">{{$hevent3->title}}</h1>
                <!-- <p id="description">Camelot Restaurant and Lounge, located in Adliya’s Block 338, is known for its enchanting ambiance and sophisticated culinary off...</p> -->
              </div>
			  @endforeach
            <!-- </div>  -->
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
		<?php $hevents4=App\Models\Event::home_events4();?>
		@foreach($hevents4 as $hevent4)
          <img src="{{asset($hevent4->fimage1)}}" class="gridimg3" alt="">
          <div class="update-heading-title4">
            <h1 id="title" class="">{{$hevent4->title}}</h1>
            <p id="description">{!!substr($hevent4->description,0,125)!!}...</p>
          </div>
		  @endforeach
        </div>
      </div>
    </div>
  </section>
<!-- LAPTOP SLIDER -->


  <!-- MOBILE SLIDER -->
  <section class="mobile" style="background:#000">
    <div class="container">
      <div class="row slider-row">
        <div class="col-lg-12 col-md-12 col-sm-12">
		<?php $hevents1=App\Models\Event::home_events1();?>
		@foreach($hevents1 as $hevent1)
          <img src="{{asset($hevent1->fimage1)}}" class="gridimg1mob" alt="">
          <div class="update-heading-title1">
            <h1 id="title" class="">{{$hevent1->title}}</h1>
            <p id="description">Camelot Restaurant and Lounge, located in Adliya’s Block 338, is known for its enchanting ambiance and sophisticated culinary off...</p>
          </div>
		  @endforeach
        </div>
        <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7 gridmob-sec2-one">
		<?php $hevents2=App\Models\Event::home_events2();?>
		@foreach($hevents2 as $hevent2)
          <img src="{{asset($hevent2->fimage1)}}" class="gridimg3" alt="">
          <div class="update-heading-title4">
            <h1 id="title" class="">{{$hevent2->title}}</h1>
          </div>
		  @endforeach
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 gridmob-sec2-two">
		<?php $hevents3=App\Models\Event::home_events3();?>
		@foreach($hevents3 as $hevent3)
          <img src="{{asset($hevent3->fimage1)}}" class="gridimg3" alt="">
          <div class="update-heading-title4 mob">
            <h1 id="title" class="">{{$hevent3->title}}</h1>
          </div>
		  @endforeach
        </div>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12">
          <img src="images/destinations/gridimg2.jpg" class="gridimg3" alt="">
          <div class="update-heading-title4">
            <h1 id="title" class="">This Friday Brunch at Camelot Restaurant</h1>
            <p id="description">Camelot Restaurant and Lounge, located in Adliya’s Block 338, is known for its enchanting ambiance and sophisticated culinary off...</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
          <img src="images/destinations/gridimg3.jpg" class="gridimg3" alt="">
          <div class="update-heading-title4">
            <h1 id="title" class="">This Friday Brunch at Camelot Restaurant</h1>
            <p id="description">Camelot Restaurant and Lounge, located in Adliya’s Block 338, is known for its enchanting ambiance and sophisticated culinary off...</p>
          </div>
        </div>
      </div>  -->
    </div>
  </section>
  <!-- MOBILE SLIDER -->


    

    <!--asha code starts-->
    <div class="container-fluid bg-gray pt-3 eventsec-home">


       <div class="section-full bg-gray-1 content-inner about-us pt-5 allevents-sec">
                <div class="container">
          <div class="section-head text-black text-left text-center eventshead">
            <h2 class="eventhead-h1"><div class="line-seperator"></div> EVENTS IN BAHRAIN <div class="line-seperator"></div></h2>
            <p class="event-new-p eventmob-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing</p>
          </div>

          <div class="site-filters clearfix center m-b40 listing-filters">
            <ul class="filters" data-toggle="buttons">
              <li data-filter="" class="btn list-tabevent active">
                <input type="radio">
                <a href="#" class="site-button-link"><span><i class=""></i>All</span></a> 
              </li>
              <li data-filter="tickets" class="btn list-tabevent">
                <input type="radio">
                <a href="#" class="site-button-link"><span><i class="la la-ticket"></i> Buy Tickets</span></a> 
              </li>
			  <?php
							$icons=array('la-thumb-tack','la-star-o','la-heart-o');
							$i=0;
							?>
							@foreach($event_category as $event_category)
              <li data-filter="category_{{$event_category->id}}" class="btn list-tabevent">
                <input type="radio">
                <a href="#" class="site-button-link"><span><i class="la {{$icons[$i]}}"></i> {{$event_category->category_name}}</span></a> 
              </li>
			  <?php $i++; ?>
              @endforeach
            </ul>
          </div>
          <div class="clearfix">
             <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery row sp10">
             @foreach($events as $event) 
			 <li class="category_{{$event->category_name}} card-container col-lg-3 col-md-6 col-sm-6 event-mobileview1">
                <div class="listing-bx featured-star-right m-b30 style-2">

                  <div class="listing-media">
                    <a href="event-single-page.html">
                    <img src="{{asset($event->fimage1)}}" class="img-zoom" alt=""></a>
                    <div class="featured-type featured-top cross_tag">
                        Buy Tickets
                                         </div>
                    <ul class="featured-star category_tab">
                      
                      <a href="categories.html" class="category_txt">{{$event->subcategory_name}}</a>
                      
                    </ul>
                  </div>
                  <div class="listing-info info1">
                    <h3 class="title"><a href="{{url('events/'.$event->subcategory_name.'/'.$event->url)}}">{{substr($event->title,0,15)}}...</a></h3>
                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> {{ \DateTime::createFromFormat('d/m/Y', $event->start_date)->format('D, d M Y') }}</span> </h6>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">{{substr($event->location,0,35)}}...</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                      
                      <li class="open arrow_btn "><a href="{{url('events/'.$event->subcategory_name.'/'.$event->url)}}" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
                </div>
              </li>
			  @endforeach   
           
			</ul> 
          </div>
        
        <a href="{{ url('events') }}"><button class="site-button text-uppercase radius-xl align-self-center allviewmore">View All Events &nbsp; <i class="fa fa-chevron-right"></i></button></a>
        
        </div>
      </div>
            <!-- Our Services -->



            <!-- Featured Destinations -->
            <!--<div class="section-full bg-white content-inner">
                <div class="container">
          <div class="section-head text-black text-center">
            
            <h2 class="box-title">Offers</h2>
            <div class="dlab-separator bg-primary"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
          </div>
                    <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 offer-box-mob">
              <div class="featured-bx offerbox-sec m-b30">
                <div class="featured-media">
                  <img src="images/destinations/offer1.jpg" alt=""/>
                </div>  
                <div class="featured-info offer-item">
                  <h5 class="title offer-title"><a href="#">London</a></h5>
                  <ul class="featured-category">
                    <li class="offer-date"><i class="icon-calendar"></i>Sun, 12 Feb 2023</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 offer-box-mob">
              <div class="featured-bx offerbox-sec m-b30">
                <div class="featured-media">
                  <img src="images/destinations/offer2.jpg" alt=""/>
                </div>  
                <div class="featured-info offer-item">
                  <h5 class="title offer-title"><a href="#">United States</a></h5>
                  <ul class="featured-category">
                    <li class="offer-date"><i class="icon-calendar"></i>Sun, 12 Feb 2023</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 offer-box-mob">
              <div class="featured-bx offerbox-sec m-b30">
                <div class="featured-media">
                  <img src="images/destinations/offer3.jpg" alt=""/>
                </div>  
                <div class="featured-info offer-item">
                  <h5 class="title offer-title"><a href="#">Korea</a></h5>
                  <ul class="featured-category">
                    <li class="offer-date"><i class="icon-calendar"></i>Sun, 12 Feb 2023</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 offer-box-mob">
              <div class="featured-bx offerbox-sec m-b30">
                <div class="featured-media">
                  <img src="images/destinations/offer4.jpg" alt=""/>
                </div>  
                <div class="featured-info offer-item">
                  <h5 class="title offer-title"><a href="#">Japan</a></h5>
                  <ul class="featured-category">
                    <li class="offer-date"><i class="icon-calendar"></i>Sun, 12 Feb 2023</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
                </div>

                <a href="#"><button class="site-button text-uppercase radius-xl align-self-center allviewmore">View More Offers</button></a>


            </div>-->
      <!-- Featured Destinations End -->

    </div>


    

<!--<div class="container text-center banner-magazine">
                <a href="#"><img src="images/featured/new-banner.jpg" class="banner-images" alt=""></a> 
            </div>-->
            <div class="container text-center banner-magazine">
      <div class="carousel-container">
        @foreach($middle_ad as $mad)
          <img src="{{asset($mad->banner) }}" class="banner-images" alt="Banner Image 1">
          @endforeach
          <div class="custom-dot-navigation"></div> <!-- Unique class name for dots -->
      </div>
    </div>



    <!-- Photos Area -->
    <section class="photos-lap">
      <div class="section-full bg-white content-inner owl-out photo-index">
                <div class="container">
          <div class="section-head text-black text-left text-center">
            <h2 class="eventhead-h1"><div class="line-seperator-v-p"></div> PHOTOS <div class="line-seperator-v-p"></div></h2>
            <p class="photos-new-p eventmob-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet</p>
          </div>
        </div>
            </div>

      <div class="section-full bg-img-fix most-visited content-inner overlay-primary-dark photo-venue ">
        <div class="container">
          <div class="blog-carousel owl-carousel owl-btn-2 owl-btn-center-lr primary blog-shadow-out">
		  @foreach($photos as $photo)	
		  <div class="item">
              <div class="blog-post dez-blog photo-v">
                <div class="dlab-post-media"> 
                  <a href="photos.html"><img src="{{ asset($photo->cover_image) }}" class="photo-images-sec img-zoom" alt=""/></a>
                </div>
                <div class="">
                  <div class="dlab-post-title ">
                    <h5 class="post-title"><a href="photos.html" class="photo-head">{{substr($photo->title,0,15)}}..</a></h5>
                    <p class="photo-head-calendar"><i class="icon-calendar calendericon"></i> <?php $dateString = $photo->album_date; // Assuming $photo->album_date is '31/05/2023'
$dateObject = DateTime::createFromFormat('d/m/Y', $dateString);

if ($dateObject) {
    echo $dateObject->format('D, d M Y'); // Outputs the desired format
}?></p>
                  </div>
                </div>
              </div>
            </div>
			@endforeach
            
          </div>
        </div>
      </div>

      <div class="container btnvdo-ven">
        <a href="photos.html"><button class="site-button text-uppercase radius-xl align-self-center photos-btn">View All Photos &nbsp; <i class="fa fa-chevron-right"></i></button></a>
      </div>
    </section>
    <!-- Photos Area -->


      <!-- Photos Area Mobile-->
    <section class="photos-mob">
      <div class="section-full bg-white content-inner owl-out">
                <div class="container">
          <div class="section-head text-black text-left text-center">
            <h2 class="eventhead-h1"><div class="line-seperator"></div> PHOTOS <div class="line-seperator"></div></h2>
            <p class="photos-new-p eventmob-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet</p>
          </div>
        </div>
            </div>

      <div class="section-full bg-img-fix most-visited content-inner overlay-primary-dark mobpicnew" style="background:#000;">
        <div class="container">
          <div class="row m-lr0 featured-style2-area">
            <div class="col-lg-12 col-md-12 p-lr0">
              <div class="row m-lr0">
                <div class="col-lg-3 col-md-4 col-sm-6 p-lr0 gallery1">
                  <div class="item mobphoto-box">
                    <div class="blog-post dez-blog">
                      <div class="dlab-post-media"> 
                        <a href="photos.html"><img src="images/blog/grid/photo1.jpg" class="photo-images-sec" alt=""/></a> 
                      </div>
                      <div class="">
                        <div class="dlab-post-title ">
                          <h5 class="post-title"><a href="photos.html" class="photo-head">Saudi Arabia tourist visa ...</a></h5>
                          <p class="photo-head-calendar"><i class="icon-calendar calendericon"></i> Fri, 02 Sep 2022</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-lr0 gallery1">
                  <div class="item mobphoto-box">
                    <div class="blog-post dez-blog">
                      <div class="dlab-post-media"> 
                        <a href="photos.html"><img src="images/blog/grid/photo2.jpg" class="photo-images-sec" alt=""/></a> 
                      </div>
                      <div class="">
                        <div class="dlab-post-title ">
                          <h5 class="post-title"><a href="photos.html" class="photo-head">Six apps every new expat...</a></h5>
                          <p class="photo-head-calendar"><i class="icon-calendar calendericon"></i> Wed, 31 Aug 2022</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-lr0 gallery1">
                  <div class="item mobphoto-box">
                    <div class="blog-post dez-blog">
                      <div class="dlab-post-media"> 
                        <a href="photos.html"><img src="images/blog/grid/photo3.jpg" class="photo-images-sec" alt=""/></a> 
                      </div>
                      <div class="">
                        <div class="dlab-post-title ">
                          <h5 class="post-title"><a href="photos.html" class="photo-head">An Expat's Guide To Bahrani...</a></h5>
                          <p class="photo-head-calendar"><i class="icon-calendar calendericon"></i> Wed, 14 Sep 2022</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-lr0 gallery1">
                  <div class="item mobphoto-box">
                    <div class="blog-post dez-blog">
                      <div class="dlab-post-media"> 
                        <a href="photos.html"><img src="images/blog/grid/photo4.jpg" class="photo-images-sec" alt=""/></a> 
                      </div>
                      <div class="">
                        <div class="dlab-post-title ">
                          <h5 class="post-title"><a href="photos.html" class="photo-head">New Expats: Five Things ...</a></h5>
                          <p class="photo-head-calendar"><i class="icon-calendar calendericon"></i> Sun, 30 Oct 2022</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container pt-3">
        <a href="event-list-page.php"><button class="site-button text-uppercase radius-xl align-self-center allviewmore">View All Photos &nbsp; <i class="fa fa-chevron-right"></i></button></a>
      </div>
    </section>
      <!-- Photos Area Mobile-->



      <!-- Videos Area -->
            <div class="section-full bg-white content-inner owl-out">
                <div class="container">
          <div class="section-head text-black text-left text-center vdohead">
            <h2 class="eventhead-h1"><div class="line-seperator-v-p"></div> VIDEOS <div class="line-seperator-v-p"></div></h2>
            <p class="photos-new-p eventmob-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet</p>
          </div>
        </div>
            </div>

      <div class="section-full bg-img-fix most-visited content-inner overlay-primary-dark photo-venue">
        <div class="container">
          <div class="blog-carousel owl-carousel owl-btn-2 owl-btn-center-lr primary blog-shadow-out">
            
          @foreach($video as $videos)
            <div class="item">
              <div class="blog-post dez-blog">
                <div class="dlab-post-media"> 
                  <iframe class="youtube-vdo-area" src="{{$videos->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="">
                  <div class="dlab-post-title ">
                    <h5 class="post-title"><a href="newtobahrain-single-page.html" class="photo-head">{{substr($videos->title,0,15)}}...</a></h5>
                    <p class="photo-head-calendar"><i class="icon-calendar calendericon"></i> <?php $date = $videos->created_at; // Your original date string
$timestamp = strtotime($date); // Convert the date to a timestamp
echo $formattedDate = date('D, d M Y', $timestamp); // Format the date?></p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach  
          </div>
        </div>
      </div>

      <div class="container btnvdo-ven">
        <a href="photos.html"><button class="site-button text-uppercase radius-xl align-self-center photos-btn">View All Videos &nbsp; <i class="fa fa-chevron-right"></i></button></a>
      </div>
      <!-- Videos Area -->


      <!--<div class="container text-center banner-magazine">
                <a href="#"><img src="images/featured/new-banner.jpg" class="banner-images" alt=""></a> 
            </div>-->
            <div class="container text-center banner-magazine">
        <div class="carousel-container2">
          @foreach($bottom_ad as $bad)
            <img src="{{ asset($bad->banner) }}" class="banner-images2" alt="Banner Image 1">
          @endforeach 
            <div class="custom-dot-navigation2"></div> <!-- Unique class name for dots -->
        </div>
    </div>


      <!-- Magazine Area -->
      
            <div class="section-full content-inner owl-out magazine-padding">
                <div class="container">
          <div class="section-head text-black text-center">
            <h2 class="eventhead-h1"><div class="line-seperator-v-p"></div> MAGAZINE <div class="line-seperator-v-p"></div></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
          </div>
                    <div class="blog-carousel owl-carousel owl-btn-2 primary owl-btn-center-lr">
                    @foreach($magazines as $magazine)
                    <div class="item mobitem-magazine">
              <div class="blog-post magazinpost">
                <div class="dlab-post-media"> 
                  <a href="magazine-single-page.html"><img src="{{asset($magazine->fimage)}}" class="magazinephoto img-zoom" alt=""/></a> 
                  <ul class="featured-star magazine-tab">
                    <a href="categories.html" class="category_txt">{{$magazine->category_name}}</a>
                  </ul>
                </div>
                <div class="">
                  <div class="dlab-post-title ">
                    <h5 class="post-title"><a href="magazine-single-page.html">{{substr($magazine->title,0,15)}}..</a></h5>
                    <p class="magazinedate"><i class="icon-calendar calendericon"></i> {{date('D, d M Y',strtotime($magazine->bdate))}}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <div class="container magazinemobsec-btn">
            <a href="magazine.html"><button class="site-button text-uppercase radius-xl align-self-center photos-btn">View All Magazine &nbsp; <i class="fa fa-chevron-right"></i></button></a>
          </div>
                </div>
            </div>
      <!-- Magazine Area -->


    </div>
    <!-- Content END-->
	 @include('footer')




  