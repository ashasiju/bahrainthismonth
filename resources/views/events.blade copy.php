@include('header')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle mob-view-breadcrumb" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <!-- <h1 class="text-white">Event List</h1> -->
					<!-- <p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Event List Page</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<!--asha code starts-->
		<div class="container-fluid bg-gray">
	<div class="row">
		<div class="container pt-3">
                     <div class="section-head text-black text-center">
                        <h2 class="box-title">Check the Events of the Day</h2>
                        <div class="dlab-separator bg-primary"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
			<div class="event_calendar_section">
				<div class="events-div-center">	
					
					<div class="event_on_div ajx_event_calendar_section">
					    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<h3> EVENTS ON </h3>
<h4>Tue, <span class="numfont">18</span> April <span class="numfont">2023</span> </h4>
<input type="hidden" id="showmyscollbr" value="17">
<div class="icon-div1"></div>
<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 280px;"><div id="container" style="overflow: hidden; width: auto; height: 280px;">
<div class="event-tab-list1">
<a href="event-single-page.html" target="_blank"><h5> Abdulrahim Sharif – What Night Does II @ 9:00 am</h5></a>
</div>
<div class="event-tab-list1">
<a href="event-single-page.html" target="_blank"><h5> Daily game of Chess @ 21:30 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="event-single-page.html" target="_blank"><h5> Ramadan Paddle @ 10:00 am</h5></a>
</div>
<div class="event-tab-list1">
<a href="event-single-page.html" target="_blank"><h5> Drink and Play at The English Rose Tea Room @ 17:30 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="event-single-page.html" target="_blank"><h5> The K Hotel Ramadan Tent @ 18:00 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> Ramadan Daily Iftar Buffet 2023 at The M Restaurant Bahrain @ 18:30 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> Masaya Pavilion Ritz Carlton @ 17:51 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> The Diplomat Radisson Blu Hotel, Residence and Spa @ 17:00 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> Saharat tent - Jumeirah Gulf of Bahrain Resort and Spa @ 17:51 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> Lpod Water Park Paradise of Ramadan @ 17:50 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> Khaimat Al Khaleej @ 17:51 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> Four Seasons Ramadan Tent @ 17:51 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> "We Have a Winner" at Enma Mall this Ramadan @ 17:00 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> Günaydın Big Sultan Iftar, Suhour &amp; Ghabga @ 17:00 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> Ramadan Tent @ 17:00 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> The Second Diera Gold Festival @ 12:00 pm</h5></a>
</div>
<div class="event-tab-list1">
<a href="#" target="_blank"><h5> Ramadan at Crowne Plaza Bahrain @ 19:00 pm</h5></a>
</div>
</div><div class="slimScrollBar" style="background: rgb(121, 121, 121); width: 8px; position: absolute; top: 0px; opacity: 1; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 79.0323px;"></div><div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
<div class="icon-div2"></div>
<!--<script src="https://www.bahrainthismonth.com/assets/scripts/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://www.bahrainthismonth.com/frontend_assets/plugin/slimscroll/jquery.slimscroll.js" defer></script>-->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
<script type="text/javascript">
$(function() {
	
    $('#container').slimScroll({
        height: '280px'
    });
});

$('.icon-div1').click(function(){
    $('#container').trigger('scrollContent', [-1] );
});

$('.icon-div2').click(function(){
    $('#container').trigger('scrollContent', [+1] );
});

/* Modified slimScroll plugin */
(function($) {
    $.fn.slimScroll = function(o) {

        var ops = o;
        //do it for every element that matches selector
        this.each(function() {

            var isOverPanel, isOverBar, isDragg, queueHide, barHeight, divS = '<div></div>',
                minBarHeight = 30,
                wheelStep = 30,
                o = ops || {},
                cwidth = o.width || 'auto',
                cheight = o.height || '250px',
                size = o.size || '7px',
                color = o.color || '#000',
                position = o.position || 'right',
                opacity = o.opacity || .4,
                alwaysVisible = o.alwaysVisible === true;

            //used in event handlers and for better minification
			alwaysVisible = $('#showmyscollbr').val()>5 ? true : '';
            var me = $(this);

            //wrap content
            var wrapper = $(divS).css({
                position: 'relative',
                overflow: 'hidden',
                width: cwidth,
                height: cheight
            }).attr({
                'class': 'slimScrollDiv'
            });

            //update style for the div
            me.css({
                width: cwidth,
                height: cheight
            });

            //create scrollbar rail
            var rail = $(divS).css({
                width: '15px',
                height: '100%',
                position: 'absolute',
                top: 0
            });

            //create scrollbar
            var bar = $(divS).attr({
                'class': 'slimScrollBar ',
                style: 'border-radius: ' + size
            }).css({
                background: color,
                width: size,
                position: 'absolute',
                top: 0,
                opacity: opacity,
                display: alwaysVisible ? 'block' : 'none',
                BorderRadius: size,
                MozBorderRadius: size,
                WebkitBorderRadius: size,
                zIndex: 99
            });

            //set position
            var posCss = (position == 'right') ? {
                right: '1px'
            } : {
                left: '1px'
            };
            rail.css(posCss);
            bar.css(posCss);

            //wrap it
            me.wrap(wrapper);

            //append to parent div
            me.parent().append(bar);
            me.parent().append(rail);

            //make it draggable
            bar.draggable({
                axis: 'y',
                containment: 'parent',
                start: function() {
                    isDragg = true;
                },
                stop: function() {
                    isDragg = false;
                    hideBar();
                },
                drag: function(e) {
                    //scroll content
                    scrollContent(0, $(this).position().top, false);
                }
            });

            //on rail over
            rail.hover(function() {
                showBar();
            }, function() {
                hideBar();
            });

            //on bar over
            bar.hover(function() {
                isOverBar = true;
            }, function() {
                isOverBar = false;
            });

            //show on parent mouseover
            me.hover(function() {
                isOverPanel = true;
                showBar();
                hideBar();
            }, function() {
                isOverPanel = false;
                hideBar();
            });

            var _onWheel = function(e) {


                //use mouse wheel only when mouse is over
                if (!isOverPanel) {
                    return;
                }

                var e = e || window.event;

                var delta = 0;
                if (e.wheelDelta) {
                    delta = -e.wheelDelta / 120;
                }
                if (e.detail) {
                    delta = e.detail / 5;
                }

                //scroll content
                scrollContent(0, delta, true);

                //stop window scroll
                if (e.preventDefault) {
                    e.preventDefault();
                }
                e.returnValue = false;


                clearTimeout(queueHide);
                queueHide = setTimeout(function() {
                    hideBar();

                }, 1000);

            }

            me.bind('scrollContent', function(e, y) {
                scrollContent(0, y, true);
            });

            var scrollContent = function(x, y, isWheel) {

                //ensure bar is visible
                showBar();

                var delta = y;

                if (isWheel) {
                    //move bar with mouse wheel
                    delta = bar.position().top + y * wheelStep;

                    //move bar, make sure it doesn't go out
                    delta = Math.max(delta, 0);
                    var maxTop = me.outerHeight() - bar.outerHeight();
                    delta = Math.min(delta, maxTop);

                    //scroll the scrollbar
                    bar.css({
                        top: delta + 'px'
                    });

                }

                //calculate actual scroll amount
                percentScroll = parseInt(bar.position().top) / (me.outerHeight() - bar.outerHeight());
                delta = percentScroll * (me[0].scrollHeight - me.outerHeight());

                //scroll content
                me.scrollTop(delta);

            }

/*
                test = setInterval(function()
                {
                showBar();

                delta = $("#inner").prop("scrollHeight");

                scrollContent(0, delta, true);


                }, 3000);
                */

            var attachWheel = function() {
                if (window.addEventListener) {
                    this.addEventListener('DOMMouseScroll', _onWheel, false);
                    this.addEventListener('mousewheel', _onWheel, false);
                }
                else {
                    document.attachEvent("onmousewheel", _onWheel)

                }
            }

            //attach scroll events
            attachWheel();

            var getBarHeight = function() {
                //calculate scrollbar height and make sure it is not too small
                barHeight = Math.max((me.outerHeight() / me[0].scrollHeight) * me.outerHeight(), minBarHeight);
                bar.css({
                    height: barHeight + 'px'
                });
            }


            //set up initial height
            getBarHeight();


            function define_delta(newdelta) {
                delta = newdelta;
            }

            var showBar = function() {
                //recalculate bar height
                getBarHeight();
                clearTimeout(queueHide);

                //show only when required
                if (barHeight >= me.outerHeight()) {
                    return;
                }
                bar.fadeIn('fast');
            }

            var hideBar = function() {
                //only hide when options allow it
                if (!alwaysVisible) {
                    queueHide = setTimeout(function() {
                        if (!isOverBar && !isDragg) {
                            bar.fadeOut('fast');
                        }
                    }, 1000);
                }
            }

        });

        //maintain chainability
        return this;
    }


})(jQuery);
</script></div>
					<div class="calender_on_div">
					    <?php
					    $currentYear='2023';
					    $currentMonth='04';
$currentMonthStart	=	$currentYear . '-' . $currentMonth . '-01';
$currentMonthDaysLength = date ( 't', strtotime ( $currentMonthStart ) );
$prevMonthYear = date ( 'm,Y', strtotime ( $currentMonthStart. ' -1 Month'  ) );
$prevMonthYearArray = explode(",",$prevMonthYear);
		
$nextMonthYear = date ( 'm,Y', strtotime ( $currentMonthStart . ' +1 Month'  ) );
$nextMonthYearArray = explode(",",$nextMonthYear);
?>
<h1>
	<i class="fa fa-angle-left leftangle prev" aria-hidden="true" data-prev-month="<?php echo $prevMonthYearArray[0]; ?>" data-prev-year = "<?php echo $prevMonthYearArray[1]; ?>"></i> 
	<?php echo  date('F Y', strtotime($currentMonthStart)); ?>
	<i class="fa fa-angle-right righttangle next" aria-hidden="true" data-next-month="<?php echo $nextMonthYearArray[0]; ?>" data-next-year = "<?php echo $nextMonthYearArray[1]; ?>"></i> 
</h1>
<div class="portlet-body">
	<div class="row-fluid" id="attendence_grid">
		<div class="row-fluid">
			<span class="week-top-name">Mon</span>
			<span class="week-top-name">Tue</span>
			<span class="week-top-name">Wed</span>
			<span class="week-top-name">Thu</span>
			<span class="week-top-name">Fri</span>
			<span class="week-top-name">Sat</span>
			<span class="week-top-name">Sun</span>
		</div>
		<div class="row-fluid">
			<?php
			$weekLength = 5;
			$firstDayOfTheWeek = date ( 'N', strtotime ( $currentMonthStart ) );
			$currentDay=0;
			for($i = 0; $i < $weekLength; $i ++) 
			{
				for($j = 1; $j <= 7; $j ++) 
				{
					$cellIndex = $i * 7 + $j;
					$cellValue = null;
					if ($cellIndex == $firstDayOfTheWeek) {
						$currentDay = 1;
					}
					if (! empty ( $currentDay ) && $currentDay <= $currentMonthDaysLength) {
						$cellValue = $currentDay;
						$currentDay ++;
					}
					if($j==1)
					{ ?>
						<div class="clear"style="clear:both"></div>
					<?php } ?>
					<div class="week-cla-light-gray">
						<div class="schedule-1">
						<?php
						$showcellValue=$cellValue;
						if($cellValue < 10 && $cellValue!="")
						{
							$cellValue = '0'.$cellValue;
						} ?>
							<samp class="schedule <?php if($currentYear.'-'.$currentMonth.'-'.$cellValue==date('Y-m-d')) { echo 'activedate' ; } ?> " name="<?php echo $currentYear.'-'.$currentMonth.'-'.$cellValue; ?>" value="<?php echo $currentYear.'-'.$currentMonth.'-'.$cellValue; ?>"> 
								<span class="schedule-shiftTop" onclick="fetch_event_calendar_data('<?php echo $currentYear.'-'.$currentMonth.'-'.$cellValue; ?>')" style="cursor:pointer"><?php echo $showcellValue; ?></span> 
							</samp>  
						</div>
					</div>
					<?php
					if($j==7)
					{ ?>
						<div class="clear"style="clear:both"></div>
					<?php } ?>
			<?php }  } ?>
				
		</div>
	</div>
</div>
<style>
.activedate{background-color:#ed1c24;}
</style>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<!--code asha ends-->
		
		<!-- contact area -->
        <div class="content-block">
			<div class="section-full content-inner bg-gray">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-6">
							
							<div class="listing-filter-sidebar">
							
								<form>
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<div class="form-group">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search For Events">
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3">
											<div class="form-group">
												<div class="input-group">
													<input type="date" class="form-control" placeholder="Manama, Bahrain">
																							
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3">
											<div class="form-group">
												<select> 
													<option>Search By Category</option>
													<option>After Dark</option>
													<option>Arts</option>
													<option>Brunch</option>
													<option>Business</option>
													<option> Technology</option>
													<option>Charity</option>
													<option>Quality check</option>
													<option>Real Estate</option>
													<option>Sales</option>
													<option>Supporting</option>
													<option>Teaching</option> 
												</select>
											</div>
										</div>
										
										<div class="col-lg-3 col-md-3">
											<div class="form-group">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Manama, Bahrain">
													<ul class="filter-icon m-b0">
														<li><a href="javascript:void(0)"><i class="fa fa-search searcharrow"></i></a></li>
													</ul>										
												</div>
											</div>
										</div>
										
									</div>
								</form>
								
							</div>

							<div class="section-full content-inner about-us">
								<div class="container">

                    <div class="site-filters clearfix center m-b40 listing-filters">
					<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active">
								<input type="radio">
								<a href="#" class="site-button-link"><span><i class=""></i>All</span></a> 
							</li>
							<?php
							$icons=array('la-thumb-tack','la-star-o','la-heart-o');
							$i=0;
							?>
							@foreach($event_category as $event_category)
							<li data-filter="category_{{$event_category->id}}" class="btn">
								<input type="radio">
								<a href="#" class="site-button-link"><span><i class="la {{$icons[$i]}}"></i> {{$event_category->category_name}}</span></a> 
							</li>
							<?php $i++; ?>
							@endforeach
							<!--<li data-filter="latest-listings" class="btn">
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
							</li>-->
 						</ul>
                        <!-- <button class="site-button radius-xl eventweek_btn"><a href="event-list-page.php" class="btn-calendar">Events This Week</a></button> -->
                    </div>
                    <div class="clearfix">
                        <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery row sp10">
                            
						@foreach($events as $event)
						<li class="category_{{$event->category_name}} design card-container col-lg-3 col-md-6 col-sm-6">
								<div class="listing-bx featured-star-right m-b30 style-2 box-event-border">
									<div class="listing-media">
										<a href="{{url('event/'.$event->regtime)}}"><img src="{{ asset('assets/frond/images/listing/list2/pic7.jpg') }}" alt=""></a>
										<ul class="wish-bx">
											<li><a class="like-btn" href="#"><i class="fa fa-heart"></i> </a></li>					
										</ul>
										<ul class="featured-star category_tab">
											
											<a href="{{url('event/'.$event->regtime)}}" class="category_txt">{{$event->subcategory_name}}</a>
											
										</ul>
									</div>
									<div class="listing-info info1">
										<h3 class="title"><a href="{{url('event/'.$event->regtime)}}">{{                        <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery row sp10">
                                            substr($event->title,0.20)}}</a></h3>
										<p>{{substr($event->description,0,80)}}...</p>
										<h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> {{date('D, d M Y',strtotime($event->start_date))}}</span> </h6>
										<ul class="place-info ">
											<li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">{{$event->location}}</a></li>
											<li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
										<ul class="place-info mob-view-arrow">
											
											<li class="open arrow_btn "><a href="{{url('event/'.$event->regtime)}}" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
								</div>
						</li>
						@endforeach
                        </ul>
                    </div>
                </div>
				
							</div>

							<!-- Pagination start -->
							<div class="pagination-bx clearfix text-center pagination-sec">
								<ul class="pagination">
									<li class="previous"><a href="javascript:void(0)"><i class="fa fa-arrow-left"></i></a></li>
									<li><a href="javascript:void(0)">1</a></li>
									<li><a href="javascript:void(0)">2</a></li>
									<li><a href="javascript:void(0)">...</a></li>
									<li class="active"><a href="javascript:void(0)">7</a></li>
									<li class="next"><a href="javascript:void(0)"><i class="fa fa-arrow-right"></i></a></li>
								</ul>
							</div>
							<!-- Pagination END -->
						</div>
						
					</div>
				</div>
			</div>
        </div>
		<!-- contact area END -->
		
		
		<!-- Why Choose Us -->
			<div class="section-full bg-img-fix most-visited content-inner overlay-primary-dark listblack-area" style="background-image:url(images/background/bg1.jpg);">
				<div class="container">
					<div class="section-head text-white text-center">
						<h2 class="box-title">How to Add Events ?</h2>
						<div class="dlab-separator bg-white"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="icon-bx-wraper sr-box center box1 m-b30">
								<div class="icon-bx-lg radius bg-white m-b20"><a href="#" class="icon-cell text-primary"><i class="icon-speech"></i></a> </div>
								<div class="icon-content">
									<h3 class="dlab-tilte">Register With Us</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="icon-bx-wraper sr-box center  m-b30">
								<div class="icon-bx-lg radius bg-white m-b20"><a href="#" class="icon-cell text-primary"><i class="flaticon-place"></i></a> </div>
								<div class="icon-content">
									<h3 class="dlab-tilte">Create Youe Venue</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="icon-bx-wraper sr-box center box1 m-b30">
								<div class="icon-bx-lg radius bg-white m-b20"><a href="#" class="icon-cell text-primary"><i class="icon-calendar"></i></a> </div>
								<div class="icon-content">
									<h3 class="dlab-tilte">Post Your Events</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
								</div>
							</div>
						</div>
					</div>

                            <a href="signin.html" class="site-button-link sign_btn registerbtn">Register Now</a>
					
				</div>
			</div>
			<!-- Why Chose Us End -->
			
			
			
			<!-- Featured Destinations -->
            <div class="section-full bg-white content-inner owl-out">
                <div class="container">
					<div class="section-head text-black text-center">
						
						<h2 class="box-title">Popular Venues</h2>
						<div class="dlab-separator bg-primary"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
					</div>
					
					<div class="popular-cities-carousel owl-carousel owl-btn-2 owl-btn-center-lr primary">
						<div class="items">
							<div class="featured-bx1 m-b30">
								<div class="featured-media">
									<img src="images/destinations/pic2.jpg" alt=""/>
								</div>	
								<div class="featured-info">
									
									<h5 class="title"><a href="#">La Pergola</a></h5>
									<ul class="featured-category">
										<li><i class="fa fa-map-marker"></i> <a href="venue.html" class="nightlyf-venue">Retro Lounge</a></li>
										<li><i class="fa fa-map-o"></i> 30+ events</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="items">
							<div class="featured-bx1 m-b30">
								<div class="featured-media">
									<img src="images/destinations/pic3.jpg" alt=""/>
								</div>	
								<div class="featured-info">
									
									<h5 class="title"><a href="#">Sato</a></h5>
									<ul class="featured-category">
										<li><i class="fa fa-map-marker"></i> <a href="venue.html" class="nightlyf-venue">Popina</a></li>
										<li><i class="fa fa-map-o"></i> 30+ events</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="items">
							<div class="featured-bx1 m-b30">
								<div class="featured-media">
									<img src="images/destinations/pic4.jpg" alt=""/>
								</div>	
								<div class="featured-info">
									
									<h5 class="title"><a href="#">Retro Lounge</a></h5>
									<ul class="featured-category">
										<li><i class="fa fa-map-marker"></i> <a href="venue.html" class="nightlyf-venue">Wagalag</a></li>
										<li><i class="fa fa-map-o"></i> 30+ events</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="items">
							<div class="featured-bx1 m-b30">
								<div class="featured-media">
									<img src="images/destinations/pic5.jpg" alt=""/>
								</div>	
								<div class="featured-info">
									
									<h5 class="title"><a href="#">Popina</a></h5>
									<ul class="featured-category">
										<li><i class="fa fa-map-marker"></i> <a href="venue.html" class="nightlyf-venue">Bab Al-Bahrain</a></li>
										<li><i class="fa fa-map-o"></i> 30+ events</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

                </div>
				
				<button class="site-button text-uppercase radius-xl align-self-center allviewmore">View More</button>
				
            </div>
			<!-- Featured Destinations End -->
		
		
			
			
    </div>
    <!-- Content END-->
	<style>
.event_calendar_section {
  width: 75%;
  margin: 30px auto;
}
.events-div-center {
  width: 102.2%;
  float: left;
  border: 1px solid #222224;
}
.calender_on_div h1 {
  color: #000;
  font-size: 24px;
  padding-bottom: 22px;
  padding-top: 5px;
  font-weight: 600;
  letter-spacing: 1px;
}
.calender_on_div h1, .event_calendar_section h3, .event_calendar_section h4 {
  
  text-align: center;
}
#attendence_grid {
  padding-left: 17px;
}
.week-top-name {
  padding: 3px 1%;
  background: #f6f4ff;
  border: 0;
  color:#ed1c24;
}
.week-cla-light-gray, .week-top-name {
  font-size: 15px;
  width: 14%;
  font-weight: 600;
  float: left;
}
.week-cla-light-gray {
  padding: 12px 1%;
  min-height: 46px;
  background: #f6f4ff;
  color: #000;
  
}
.week-cla-light-gray, .week-top-name {
  font-size: 15px;
  width: 14%;
  font-weight: 600;
  float: left;
}
    .calender_on_div {
  width: 55%;
  float: left;
  padding-left: 15px;
}
.event_on_div {
  position: relative;
}
.event_on_div {
  width: 45%;
  float: left;
  background: #222224;
  padding-bottom: 30px;
  min-height: 392px;
  background:url("https://emweb.co.in/bahrain/images/background/bg6.jpg");
    background-size: cover;
  background-position: center center;
  display: table;

}
.slimScrollDiv > div#container {
  overflow: hidden !important;
}
.event-tab-list1 {
  width: 80%;
  background: rgba(255,255,255,0.2);
  margin: 10px auto 15px;
  padding: 1px 13px;
  border-radius: 5px;
  border:1px solid rgba(255,255,255,0.2);
}
.event-tab-list1:hover {
  background: #ed1c24;
}
.event-tab-list1 a {
  display: block;
  border: none;
}
.event-tab-list1 h5 {
  color: #fff;
  line-height: 20px;
  margin-top: 4px;
  margin-bottom: 5px;
  font-weight: 600;
  font-size: 15px;
}
code, kbd, pre, samp {
  
  font-size: 1em;
}
code, kbd, pre, samp {
  
  padding: 2px 5px;
  font-size: 16px;
}
.event_calendar_section h3 {
  color: #ed1c24;
  font-weight: 700;
  margin-bottom: 0;
  font-size: 21px;
}
.calender_on_div h1, .event_calendar_section h3, .event_calendar_section h4 {
  
  text-align: center;
}
.event_calendar_section h4 {
  color: #fff;
  font-weight: 500;
  font-size: 17px;
  margin-top: 3px;
}
.slimScrollDiv > div#container {
  overflow: hidden !important;
}
#container {
  max-height: 280px;
}
.archives-bg h1, .calender_on_div h1, .gallery-section-div h2, .home-event-link-tab, .week-top-name, footer h3 {
  text-transform: uppercase;
}
.activedate {
  background-color: #ed1c24;
}
.activedate {
  background: #ed1c24;
    background-color: #ed1c24;
  color: #fff;
  border-radius: 11px;
}
.h1, .h2, .h3, h1, h2, h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
.icon-div1 {
  width: 100%;
  float: left;
}
.icon-div1::before, .icon-div2::after {
  font-family: FontAwesome;
  display: inline-block;
  padding-right: 12px;
  color: #fff;
  float: right;
  font-size: 22px;
  position: absolute;
  right: 0;
  margin-top: -25px;
  cursor: pointer;
  vertical-align: middle;
}
.icon-div2::after {
  content: "\f107";
  bottom: 0;
}
.icon-div1::before, .icon-div2::after {
  font-family: FontAwesome;
  display: inline-block;
  padding-right: 12px;
  color: #fff;
  float: right;
  font-size: 22px;
  position: absolute;
  right: 0;
  margin-top: -25px;
  cursor: pointer;
  vertical-align: middle;
}
</style>
<!--<script src="https://www.bahrainthismonth.com/assets/custom/js/comman.js"></script>-->
<script type="text/javascript">
$(function() {
	
    $('#container').slimScroll({
        height: '280px'
    });
});

$('.icon-div1').click(function(){
    $('#container').trigger('scrollContent', [-1] );
});

$('.icon-div2').click(function(){
    $('#container').trigger('scrollContent', [+1] );
});

/* Modified slimScroll plugin */
(function($) {
    $.fn.slimScroll = function(o) {

        var ops = o;
        //do it for every element that matches selector
        this.each(function() {

            var isOverPanel, isOverBar, isDragg, queueHide, barHeight, divS = '<div></div>',
                minBarHeight = 30,
                wheelStep = 30,
                o = ops || {},
                cwidth = o.width || 'auto',
                cheight = o.height || '250px',
                size = o.size || '7px',
                color = o.color || '#000',
                position = o.position || 'right',
                opacity = o.opacity || .4,
                alwaysVisible = o.alwaysVisible === true;

            //used in event handlers and for better minification
			alwaysVisible = $('#showmyscollbr').val()>5 ? true : '';
            var me = $(this);

            //wrap content
            var wrapper = $(divS).css({
                position: 'relative',
                overflow: 'hidden',
                width: cwidth,
                height: cheight
            }).attr({
                'class': 'slimScrollDiv'
            });

            //update style for the div
            me.css({
                overflow: 'hidden',
                width: cwidth,
                height: cheight
            });

            //create scrollbar rail
            var rail = $(divS).css({
                width: '15px',
                height: '100%',
                position: 'absolute',
                top: 0
            });

            //create scrollbar
            var bar = $(divS).attr({
                'class': 'slimScrollBar ',
                style: 'border-radius: ' + size
            }).css({
                background: color,
                width: size,
                position: 'absolute',
                top: 0,
                opacity: opacity,
                display: alwaysVisible ? 'block' : 'none',
                BorderRadius: size,
                MozBorderRadius: size,
                WebkitBorderRadius: size,
                zIndex: 99
            });

            //set position
            var posCss = (position == 'right') ? {
                right: '1px'
            } : {
                left: '1px'
            };
            rail.css(posCss);
            bar.css(posCss);

            //wrap it
            me.wrap(wrapper);

            //append to parent div
            me.parent().append(bar);
            me.parent().append(rail);

            //make it draggable
            bar.draggable({
                axis: 'y',
                containment: 'parent',
                start: function() {
                    isDragg = true;
                },
                stop: function() {
                    isDragg = false;
                    hideBar();
                },
                drag: function(e) {
                    //scroll content
                    scrollContent(0, $(this).position().top, false);
                }
            });

            //on rail over
            rail.hover(function() {
                showBar();
            }, function() {
                hideBar();
            });

            //on bar over
            bar.hover(function() {
                isOverBar = true;
            }, function() {
                isOverBar = false;
            });

            //show on parent mouseover
            me.hover(function() {
                isOverPanel = true;
                showBar();
                hideBar();
            }, function() {
                isOverPanel = false;
                hideBar();
            });

            var _onWheel = function(e) {


                //use mouse wheel only when mouse is over
                if (!isOverPanel) {
                    return;
                }

                var e = e || window.event;

                var delta = 0;
                if (e.wheelDelta) {
                    delta = -e.wheelDelta / 120;
                }
                if (e.detail) {
                    delta = e.detail / 5;
                }

                //scroll content
                scrollContent(0, delta, true);

                //stop window scroll
                if (e.preventDefault) {
                    e.preventDefault();
                }
                e.returnValue = false;


                clearTimeout(queueHide);
                queueHide = setTimeout(function() {
                    hideBar();

                }, 1000);

            }

            me.bind('scrollContent', function(e, y) {
                scrollContent(0, y, true);
            });

            var scrollContent = function(x, y, isWheel) {

                //ensure bar is visible
                showBar();

                var delta = y;

                if (isWheel) {
                    //move bar with mouse wheel
                    delta = bar.position().top + y * wheelStep;

                    //move bar, make sure it doesn't go out
                    delta = Math.max(delta, 0);
                    var maxTop = me.outerHeight() - bar.outerHeight();
                    delta = Math.min(delta, maxTop);

                    //scroll the scrollbar
                    bar.css({
                        top: delta + 'px'
                    });

                }

                //calculate actual scroll amount
                percentScroll = parseInt(bar.position().top) / (me.outerHeight() - bar.outerHeight());
                delta = percentScroll * (me[0].scrollHeight - me.outerHeight());

                //scroll content
                me.scrollTop(delta);

            }

/*
                test = setInterval(function()
                {
                showBar();

                delta = $("#inner").prop("scrollHeight");

                scrollContent(0, delta, true);


                }, 3000);
                */

            var attachWheel = function() {
                if (window.addEventListener) {
                    this.addEventListener('DOMMouseScroll', _onWheel, false);
                    this.addEventListener('mousewheel', _onWheel, false);
                }
                else {
                    document.attachEvent("onmousewheel", _onWheel)

                }
            }

            //attach scroll events
            attachWheel();

            var getBarHeight = function() {
                //calculate scrollbar height and make sure it is not too small
                barHeight = Math.max((me.outerHeight() / me[0].scrollHeight) * me.outerHeight(), minBarHeight);
                bar.css({
                    height: barHeight + 'px'
                });
            }


            //set up initial height
            getBarHeight();


            function define_delta(newdelta) {
                delta = newdelta;
            }

            var showBar = function() {
                //recalculate bar height
                getBarHeight();
                clearTimeout(queueHide);

                //show only when required
                if (barHeight >= me.outerHeight()) {
                    return;
                }
                bar.fadeIn('fast');
            }

            var hideBar = function() {
                //only hide when options allow it
                if (!alwaysVisible) {
                    queueHide = setTimeout(function() {
                        if (!isOverBar && !isDragg) {
                            bar.fadeOut('fast');
                        }
                    }, 1000);
                }
            }

        });

        //maintain chainability
        return this;
    }


})(jQuery);
</script>
	@include('footer')