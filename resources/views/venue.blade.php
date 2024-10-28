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
    

    				
    				
		
		
		<!-- Venue Section Destinations -->
		<div class="section-full bg-white content-inner venue-section owl-out">
                <div class="container">
                	<div class="section-head text-black text-center">
                        <h2 class="eventhead-h1 venuehead-mb head-ven"><div class="line-seperator-venue"></div> Venues in Bahrain<div class="line-seperator-venue"></div></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                	<div class="tab-nav-bar">
	                	<div class="site-filters clearfix center m-b40 listing-filters tab-navigation">

	                		<ion-icon class="left-btn"><i class="fa fa-angle-left"></i></ion-icon>
	        				<ion-icon class="right-btn"><i class="fa fa-angle-right"></i></ion-icon>

							<ul class="filters tab-menu" data-toggle="buttons">
								<li data-filter="" class="btn tab-btn active">
									<input type="radio">
									<a href="#" class="site-button-link"><span><i class=""></i>All</span></a> 
								</li>
								@foreach($venue_category as $venues_category)
								<li data-filter="venue_{{$venues_category->id}}" class="btn tab-btn">
									<input type="radio">
									<a href="#" class="site-button-link"><span><i class="fa fa-map-marker iconvenue"></i> {{$venues_category->category_name}}</span></a> 
								</li>
								@endforeach
							</ul>				
						</div>
					</div>

					<div class="container">
                    <div class="flex">
                        <div class="row">
						@foreach($venues as $venue)
                            <li class="venue_{{$venue->category}} col-lg-3 col-md-3 col-sm-12 venue-col-sec design">
                                <div class="listing-bx featured-star-right m-b30 style-2 content">
                                    <div class="listing-media">
			                            <a href="venue-single-page.html"><img src="images/listing/list2/event1.jpg" class="eventsec-img img-zoom eventmob-image" alt=""></a>
			                            <ul class="featured-star category_tab">
											<a href="categories.html" class="category_txt">Festival</a>
										</ul>
			                        </div>
                                    <div class="listing-info info1 venuelist-bg">
			                            <h3 class="title pt-3 venue-head"><a href="venue-single-page.html">La Fontaine Centre of  Contemporary Art, </a></h3>
			                            <h6 class="post-date"> <span class="venue-single-txt"><a class="all-venue"> Manama</a></span> </h6>
			                        </div>
                                </div>
</li>
                        @endforeach    
                          
                           
                        </div>
                    </div> 
                    <a href="#" id="loadMore">Load More</a>
                </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
  $(".content").slice(0, 8).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 4).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("End of the Content").addClass("noContent");
    }
  });
  
})
</script> 

                </div>
            </div>
			<!--Venue Section Destinations End -->



		
			<div class="container text-center banner-venue">
               	<a href="#"><img src="images/featured/new-banner.jpg" alt=""></a> 
            </div>



            <div class="section-full content-inner about-us venue-upcoming-sec venu-bg-upcm">
                <div class="container">
                    <div class="section-head text-black text-center pt-3">
                        <h2 class="eventhead-h1 venuehead-mb"><div class="line-seperator-gallery"></div> Venues of Upcoming Events <div class="line-seperator-gallery"></div></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                    <div class="owl-location-carousel owl-carousel owl-btn-2 owl-btn-center-lr-arrow eventdiningsec venueupcm-section">
                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="venue-single-page.html"><img src="images/listing/list2/event7.jpg" class="eventsec-img img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Festival</a>
                                    </ul>
                                    </div>
                                <div class="listing-info info1 venuedetail-bg boxwhite-mob">
                                    <h3 class="title pt-3 venue-head"><a href="venue-single-page.html" class="mob-venuehd">La Fontaine Centre of  Contemporary </a></h3>
                                    <h6 class="post-date"> <span class="venue-single-txt"><a class="all-venue venuemob-place"> Manama</a></span> </h6>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="venue-single-page.html"><img src="images/listing/list2/event5.jpg" class="eventsec-img img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Festival</a>
                                    </ul>
                                    </div>
                                <div class="listing-info info1 venuedetail-bg boxwhite-mob">
                                    <h3 class="title pt-3 venue-head"><a href="venue-single-page.html" class="mob-venuehd">La Fontaine Centre of  Contemporary </a></h3>
                                    <h6 class="post-date"> <span class="venue-single-txt"><a class="all-venue venuemob-place"> Manama</a></span> </h6>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="venue-single-page.html"><img src="images/listing/list2/event1.jpg" class="eventsec-img img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Festival</a>
                                    </ul>
                                    </div>
                                <div class="listing-info info1 venuedetail-bg boxwhite-mob">
                                    <h3 class="title pt-3 venue-head"><a href="venue-single-page.html" class="mob-venuehd">La Fontaine Centre of  Contemporary </a></h3>
                                    <h6 class="post-date"> <span class="venue-single-txt"><a class="all-venue venuemob-place"> Manama</a></span> </h6>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="venue-single-page.html"><img src="images/listing/list2/event3.jpg" class="eventsec-img img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Festival</a>
                                    </ul>
                                    </div>
                                <div class="listing-info info1 venuedetail-bg boxwhite-mob">
                                    <h3 class="title pt-3 venue-head"><a href="venue-single-page.html" class="mob-venuehd">La Fontaine Centre of  Contemporary </a></h3>
                                    <h6 class="post-date"> <span class="venue-single-txt"><a class="all-venue venuemob-place"> Manama</a></span> </h6>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="venue-single-page.html"><img src="images/listing/list2/event5.jpg" class="eventsec-img img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Festival</a>
                                    </ul>
                                    </div>
                                <div class="listing-info info1 venuedetail-bg boxwhite-mob">
                                    <h3 class="title pt-3 venue-head"><a href="venue-single-page.html" class="mob-venuehd">La Fontaine Centre of  Contemporary </a></h3>
                                    <h6 class="post-date"> <span class="venue-single-txt"><a class="all-venue venuemob-place"> Manama</a></span> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container text-center bannervenue">
               	<a href="#"><img src="images/featured/new-banner.jpg" alt=""></a> 
            </div>
    
    <!-- Content END-->
	@include('footer')

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>


<!-- EVENTS SCROLLING SEC -->
<script>
    const carousel = document.querySelector('.carousel-inner-gallery-home');
    const items = document.querySelectorAll('.carousel-item-gallery-home');
    const totalItems = items.length;
    let slideIndex = 0;

    document.getElementById('next').addEventListener('click', () => {
      slideIndex = (slideIndex + 1) % totalItems;
      updateCarousel();
    });

    document.getElementById('prev').addEventListener('click', () => {
      slideIndex = (slideIndex - 1 + totalItems) % totalItems;
      updateCarousel();
    });

    function updateCarousel() {
      carousel.style.transform = `translateX(-${slideIndex * 100}%)`;
    }
  </script>
  <!-- EVENTS SCROLLING SEC -->




 <!-- VENUE SCROLLING TAB SCRIPT -->
  <script>

const btnLeft = document.querySelector('.left-btn');
const btnRight = document.querySelector('.right-btn');
const tabMenu = document.querySelector('.tab-menu');

const iconVisibility = () => {
	let scrollLeftValue = Math.ceil(tabMenu.scrollLeft);
	console.log('1.', scrollLeftValue);

	let scrollableWidth = tabMenu.scrollWidth - tabMenu.clientWidth;
	console.log('2.', scrollableWidth);

	btnLeft.style.display = scrollLeftValue > 0 ? 'block' : 'none';
	btnRight.style.display = scrollableWidth > scrollLeftValue ? 'block' : 'none';
};

btnRight.addEventListener('click', () => {
	tabMenu.scrollLeft += 150;
	//iconVisibility();
	setTimeout(() => iconVisibility(), 50);
});
btnLeft.addEventListener('click', () => {
	tabMenu.scrollLeft -= 150;
	//iconVisibility();
	setTimeout(() => iconVisibility(), 50);
});

window.onload = function () {
	btnRight.style.display =
		tabMenu.scrollWidth > tabMenu.clientWidth
			|| tabMenu.scrollWidth >= window.innerWidth
			? 'block' : 'none';
	btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? '' : 'none';
};

window.onresize = function () {
	btnRight.style.display =
		tabMenu.scrollWidth > tabMenu.clientWidth
			|| tabMenu.scrollWidth >= window.innerWidth
			? 'block' : 'none';
	btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? '' : 'none';

	let scrollLeftValue = Math.round(tabMenu.scrollLeft);
	btnLeft.style.display = scrollLeftValue > 0 ? 'block' : 'none';
};




// Javascript to make the tab navigation draggable
let activeDrag = false;

tabMenu.addEventListener('mousemove', (drag) => {
	if (!activeDrag) return;
	tabMenu.scrollLeft -= drag.movementX;
	iconVisibility();

	tabMenu.classList.add('dragging');
});

document.addEventListener('mouseup', () => {
	activeDrag = false;

	tabMenu.classList.remove('dragging');
});

tabMenu.addEventListener('mousedown', () => {
	activeDrag = true;
});



// Javascript to view tab contents on click tab buttons
const tabs = document.querySelectorAll('.tab');
const tabBtns = document.querySelectorAll('.tab-btn');

const tab_Nav = function (tabBtnClick) {
	tabBtns.forEach((tabBtn) => {
		tabBtn.classList.remove('active');
	});

	tabs.forEach((tab) => {
		tab.classList.remove('active');
	});

	tabBtns[tabBtnClick].classList.add('active');
	tabs[tabBtnClick].classList.add('active');
};

tabBtns.forEach((tabBtn, i) => {
	tabBtn.addEventListener('click', () => {
		tab_Nav(i);
	});
});
  </script>

  <!-- VENUE SCROLLING TAB SCRIPT -->



</body>
</html>