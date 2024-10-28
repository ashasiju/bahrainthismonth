@include('header')

    <!--asha code starts-->
        <div class="container-fluid" style="background:#000">
    <div class="row">
        <div class="container">

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
$currentMonthStart  =   $currentYear . '-' . $currentMonth . '-01';
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


            <div class="section-full bg-gray-1 content-inner about-us pt-5 allevents-sec eventsingle-scroll">
                <div class="container">
                    <div class="section-head text-black text-left text-center">
                        <h2 class="eventhead-h1"><div class="line-seperator"></div> EVENTS IN BAHRAIN <div class="line-seperator"></div></h2>
                        <p class="event-new-p eventmob-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                    </div>

                    <div class="search-filter filter-style1">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control formevent-1" placeholder="Search By Event Title">
                                <input type="date" class="form-control formevent-1" placeholder="">
                                <div class="form-control"> 
                                    <select class="select-event"> 
                                        <option>Select By Category</option>
                                        <option>Construction</option>
                                        <option>Corodinator</option>
                                        <option>Employer</option>
                                    </select>
                                </div>
                                <div class="form-control"> 
                                    <select class="select-event"> 
                                        <option>Select By Venue</option>
                                        <option>Manama</option>
                                        <option>Arad Heritage</option>
                                        <option>Bin Matar</option>
                                    </select>
                                </div>
                                <div class="input-group-prepend">
                                    <button class="site-button searcharrow-event"> <i class="fa fa-search searcharrow-event"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

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
                        </ul>                   
                    </div>
            

                    <div class=""> 
                        <div class="carousel-gallery-home">
                            <div class="carousel-inner-gallery-home">
                            <?php $i = 1; $carouselOpen = false; $rowOpen = false; ?>
        @foreach($events as $event)
            <?php 
            if (($i % 9 == 1  && $i==1) || ($i % 9 == 0 && $i>1))  {
                if ($carouselOpen) echo '</pdiv>'; // Close the previous carousel item
                echo '<div class="carousel-item-gallery-home'.($i == 1 ? ' active' : '').'">';
                $carouselOpen = true;
                $rowOpen = false;
            }
           // echo $i.$i%5;
            /*if ($i % 5 == 0)  {
                if ($rowOpen) echo '</div>'; // Close the previous row
            }*/
            if(($i % 5 == 0 && $i>1) || ($i % 5 == 1 && $i==1)  || ($i % 5 == 4 && $i>8))
            {
                echo '<div class="row-gallery-home">';
                $rowOpen = true;
            }
            ?>
                                        <div class="col-home <?php if($i<=4) echo 'mobevent';?>">
                                            <div class="listing-bx featured-star-right m-b30 style-2">
                                                <div class="listing-media">
                                                    <a href="event-single-page.html">
                                                    <img src="{{$event->fimage1}}" class="eventsec-img" alt=""></a>
                                                    <div class="featured-type featured-top cross_tag">
                                                            Buy Tickets
                                                     </div>
                                                    <ul class="featured-star category_tab">
                                                        
                                                        <a href="event-single-page.html" class="category_txt">{{$event->subcategory_name}}</a>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="listing-info info1">
                                                    <h3 class="title"><a href="event-single-page.html">{{substr($event->title,0,15)}}...</a></h3>
                                                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate">{{date('D, d M Y',strtotime($event->start_date))}}</span> </h6>
                                                    <ul class="place-info ">
                                                        <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">{{$event->location}}</a></li>
                                                        <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                                    </ul>
                                                    <ul class="place-info mob-view-arrow">
                                                        
                                                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <?php
            if ($i % 4 == 0) echo '</div>'; // Close the row after 4 items
            if ($i % 8 == 0) echo '</div>'; // Close the row after 8 items

            $i++;
            ?>
        @endforeach
        <?php 
        if ($rowOpen) echo '</div>'; // Close the last row
        if ($carouselOpen) echo '</div>'; // Close the last carousel item
        ?>
                            </div>
                            <div class="controls-home mob-event-control">
                                <button id="prev"><i class="la la-arrow-left"></i></button>
                                <button id="next"><i class="la la-arrow-right"></i></button>
                            </div>
                        </div>
                        <a href="event-list-page.php"><button class="site-button text-uppercase radius-xl align-self-center photos-btn eventlist-viewbtn">View All Events &nbsp; <i class="fa fa-chevron-right"></i></button></a>
                    </div>


                </div>
            </div>
            <!-- Our Services -->
        </div>



        <div class="container text-center bannerlatest">
            <a href="#"><img src="images/featured/new-banner.jpg" alt=""></a> 
        </div>



        <!-- Dining Section -->
        <section class="">
            <div class="section-full bg-white content-inner about-us">
                <div class="container">
                    <div class="section-head text-black text-center pt-3">
                        <h2 class="eventhead-h1"><div class="line-seperator"></div> DINING EVENT <div class="line-seperator"></div></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                    <div class="owl-location-carousel owl-carousel owl-btn-2 owl-btn-center-lr eventdiningsec">
                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="dining-single-page.html"><img src="images/featured/dining-img1-event.jpg" class="diningimg-event" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1 dining-content-event">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                    <a href="dining-single-page.html"><img src="images/featured/dining-img2-event.jpg" class="diningimg-event" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1 dining-content-event">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1 dining-content-event">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1 dining-content-event">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1 dining-content-event">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                    </div>
                </div>
            </div>
        </section>
            <!-- Dining Section -->


            <!-- Dining Section Mob-->
        <!-- <section class="dining-mob">
            <div class="section-full bg-white content-inner owl-out">
                <div class="container">
                    <div class="container text-center bannerlatest">
                        <a href="#"><img src="images/featured/new-banner.jpg" alt=""></a> 
                    </div>
                    <div class="section-head text-black text-left text-center">
                        <h2 class="eventhead-h1"><div class="line-seperator"></div> PHOTOS <div class="line-seperator"></div></h2>
                        <p class="photos-new-p eventmob-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>

            <div class="section-full bg-img-fix most-visited content-inner overlay-primary-dark" style="background:#000;">
                <div class="container">
                    <div class="row m-lr0 featured-style2-area">
                        <div class="col-lg-12 col-md-12 p-lr0">
                            <div class="row m-lr0">
                                <div class="col-lg-3 col-md-4 col-sm-6 p-lr0 gallery1">
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
                                                <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 p-lr0 gallery1">
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
                                                <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 p-lr0 gallery1">
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
                                                <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 p-lr0 gallery1">
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
                                                <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
            <!-- Dining Section Mob-->



            <!-- Videos Area -->
            <section class="">
            <div class="section-full bg-gray content-inner about-us nightclubevent-area">
                <div class="container">
                    <div class="section-head text-black text-center pt-3">
                        <h2 class="eventhead-h1"><div class="line-seperator"></div> NIGHT CLUB EVENT <div class="line-seperator"></div></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                    <div class="owl-location-carousel owl-carousel owl-btn-2 owl-btn-center-lr eventdiningsec nightclub-section">
                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="dining-single-page.html"><img src="images/featured/dining-img1-event.jpg" class="diningimg-event" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                    <a href="dining-single-page.html"><img src="images/featured/dining-img2-event.jpg" class="diningimg-event" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                                    <ul class="featured-star category_tab">
                                        <a href="dining-single-page.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title"><a href="dining-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
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
                    </div>
                </div>
            </div>
            </section>

            <!-- Videos Area -->


    </div>
    <!-- Content END-->




    @include('footer')
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