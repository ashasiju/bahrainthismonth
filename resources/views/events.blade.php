@include('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!--asha code starts-->
        <div class="container-fluid" style="background:#000">
    <div class="row">
        <div class="container">

            <div class="event_calendar_section">
                <div class="events-div-center"> 
                    
                    <div class="event_on_div ajx_event_calendar_section">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<h3> EVENTS ON </h3>
<h4>{{date('D')}}, <span class="numfont">{{date('d')}}</span> {{date('M')}} <span class="numfont">{{date('Y')}}</span> </h4>
<input type="hidden" id="showmyscollbr" value="17">
<div class="icon-div1"></div>
<div class="slimScrollDiv" id="calendarcontainer" style="position: relative; overflow: hidden; width: auto; height: 280px;">
    <div id="container" style="overflow: hidden; width: auto; height: 280px;">
<?php $tevents=App\Models\Event::todays_events();?>
		@foreach($tevents as $tevent)
<div class="event-tab-list1">
<a href="{{url('events/'.$tevent->subcategory_name.'/'.$tevent->url)}}" target="_blank"><h5> {{$tevent->title}} @ {{$tevent->start_time}}</h5></a>
</div>
@endforeach

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
                        $currentYear=date('Y');
                        $currentMonth=date('m');
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


            <!-- Event Section -->

                <div class="section-full bg-gray-1 content-inner about-us pt-5 allevents-sec eventsingle-scroll">
                <div class="container">
                    <div class="section-head text-black text-left text-center dateformhead">
                        <h2 class="eventhead-h1 head-event"><div class="line-seperator"></div> EVENTS IN BAHRAIN <div class="line-seperator"></div></h2>
                        <p class="event-new-p eventmob-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. consectetur adipisicing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                    </div>

                    <div class="search-filter filter-style1">
                    <form action="{{url('filter-eventlist')}}" method="post">
                    {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" value="{{$sevent_title}}" name="event_title" class="form-control formevent-1" placeholder="Search By Event Title">
                                <input type="date" value="{{$sevent_date}}" name="event_date" class="form-control formevent-1" id="dateInput" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Search by Date">

                                <!-- <input type="text" class="form-control formevent-1" placeholder="mm/dd/yyyy"> -->

                                <script>
                                  document.addEventListener('DOMContentLoaded', function () {
                                  var dateInput = document.getElementById('dateInput');
                                  
                                  // Set placeholder for input
                                  dateInput.type = "text";
                                  dateInput.placeholder = "Search by Date";

                                  // Change to date input when focused
                                  dateInput.addEventListener('focus', function () {
                                    this.type = 'date';
                                  });

                                  // Revert back to text if input is empty
                                  dateInput.addEventListener('blur', function () {
                                    if (!this.value) {
                                      this.type = 'text';
                                    }
                                  });
                                });

                                </script>
                                
                                <!-- Custom Select for Category -->
                               <!-- <div class="custom-select-wrapper">
                                    <div class="custom-select">
                                        <div class="custom-select-trigger">Select By Category</div>
                                        <div class="custom-options">
                                            <span class="custom-option" data-value="Construction">Construction</span>
                                            <span class="custom-option" data-value="Coordinator">Coordinator</span>
                                            <span class="custom-option" data-value="Employer">Employer</span>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="form-control"> 
                                    <select class="select-event" name="event_category"> 
                                        <option value="">Select By Category</option>
                                        @foreach($event_subcategory as $subcat)
                                        <option @if($subcat->id==$sevent_category) selected="selected" @endif value="{{$subcat->id}}">{{$subcat->subcategory_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-control"> 
                                    <select class="select-event" name="event_venue"> 
                                        <option value="">Select By Venue</option>
                                        @foreach($venue as $venues)
                                        <option @if($venues->id==$sevent_venue) selected="selected" @endif value="{{$venues->id}}">{{$venues->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Custom Select for Venue -->
                               <!-- <div class="custom-select-wrapper">
                                    <div class="custom-select">
                                        <div class="custom-select-trigger">Select By Venue</div>
                                        <div class="custom-options">
                                            <span class="custom-option" data-value="Manama">Manama</span>
                                            <span class="custom-option" data-value="Arad Heritage">Arad Heritage</span>
                                            <span class="custom-option" data-value="Bin Matar">Bin Matar</span>
                                        </div>
                                    </div>
                                </div>-->

                                <div class="input-group-prepend">
                                    <button class="site-button searcharrow-event"><i class="fa fa-search searcharrow-event"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                   <!-- Horizonal Tab Widgets Added by Anandhu Start-->
          <div class="eventtabs-container">
            <ul class="eventtabs">
                <li class="eventtab-item active" data-tab="all">All</li>
                <li class="eventtab-item" data-tab="buy-tickets" class="site-button-link"><span><i class="la la-ticket"></i>Buy Tickets</span></li>
                <li class="eventtab-item" data-tab="business"><span><i class="la la-thumb-tack"></i>Business</span></li>
                <li class="eventtab-item" data-tab="night-life"><span><i class="la la-star-o"></i>Night Life</span></li>
                <li class="eventtab-item" data-tab="leisure"><span><i class="la la-heart-o"></i> Leisure</span></li>
            </ul>
          </div>

          <div class="eventtab-content active" id="all">
              <!-- Cards content for "All" -->
              <div class="eventcard inscadicon">
                  <div class="image-wrapper">
                    <img src="images/listing/list2/event1.jpg" alt="Event 1" class="img-zoom">
                    <div class="event-overlay">
                      <span class="heart-icon"><i class="fa fa-heart"></i></span>
                      <span class="event-category">Dining</span>
                    </div>
                    <div class="featured-type featured-top cross_tag">
                        Buy Tickets
                    </div>
                  </div>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard inscadicon">
                  <div class="image-wrapper">
                    <a href="event-single-page.html"><img src="images/listing/list2/event2.jpg" alt="Event 2" class="img-zoom"></a>
                      <div class="event-overlay">
                          <span class="heart-icon"><i class="fa fa-heart"></i></span>
                          <span class="event-category">Dining</span>
                      </div>
                      <div class="featured-type featured-top cross_tag">
                            Buy Tickets
                      </div>
                  </div>
                  <div class="listing-info">
                  <div class="tconaln">
                    <h3 class="title">
                      <a href="">Folklore Festival</a>
                    </h3>
                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                  </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard inscadicon">
                <div class="image-wrapper">
                    <a href="event-single-page.html">
                        <img src="images/listing/list2/event3.jpg" alt="Event 2" class="img-zoom">
                    </a>
                    <div class="event-overlay">
                        <span class="heart-icon"><i class="fa fa-heart"></i></span>
                        <span class="event-category">Dining</span>
                    </div>
                </div>
                <div class="listing-info">
                  <div class="tconaln">
                    <h3 class="title">
                        <a href="">Folklore Festival</a>
                    </h3>
                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                  </div>
                    <ul class="place-info">
                        <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                        <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
              </div>
              <div class="eventcard">
                  <div class="image-wrapper">
                    <a href="event-single-page.html"><img src="images/listing/list2/event4.jpg" alt="Event 2" class="img-zoom"></a>
                    <div class="event-overlay">
                        <span class="heart-icon"><i class="fa fa-heart"></i></span>
                        <span class="event-category">Dining</span>
                    </div>
                  </div>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <div class="image-wrapper">
                  <a href="event-single-page.html"><img src="images/listing/list2/event5.jpg" alt="Event 2" class="img-zoom"></a>
                    <div class="event-overlay">
                        <span class="heart-icon"><i class="fa fa-heart"></i></span>
                        <span class="event-category">Dining</span>
                    </div>
                </div>
                  <div class="listing-info">
                  <div class="tconaln">
                    <h3 class="title">
                      <a href="">Folklore Festival</a>
                    </h3>
                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                  </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <div class="image-wrapper">
                  <a href="event-single-page.html"><img src="images/listing/list2/event6.jpg" alt="Event 2" class="img-zoom"></a>
                    <div class="event-overlay">
                        <span class="heart-icon"><i class="fa fa-heart"></i></span>
                        <span class="event-category">Dining</span>
                    </div>
                </div>
                  <div class="listing-info">
                  <div class="tconaln">
                    <h3 class="title">
                      <a href="">Folklore Festival</a>
                    </h3>
                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                  </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                  <div class="image-wrapper">
                    <a href="event-single-page.html"><img src="images/listing/list2/event7.jpg" alt="Event 2" class="img-zoom"></a>
                    <div class="event-overlay">
                        <span class="heart-icon" onclick="toggleHeart(this)"><i class="fa fa-heart"></i></span>
                        <span class="event-category">Dining</span>
                    </div>
                  </div>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <div class="image-wrapper">
                  <a href="event-single-page.html"><img src="images/listing/list2/event8.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="event-overlay">
                        <span class="heart-icon"><i class="fa fa-heart"></i></span>
                        <span class="event-category">Dining</span>
                  </div>
                </div>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
          </div>

          <div class="eventtab-content" id="buy-tickets">
              <!-- Cards content for "Buy Tickets" -->
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event5.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event6.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event7.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event8.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                 <a href="event-single-page.html"> <img src="images/listing/list2/event1.jpg" alt="Event 1" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event2.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event3.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event4.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
          </div>

          <div class="eventtab-content" id="business">
              <!-- Cards content for "Business" -->
              <div class="eventcard">
                 <a href="event-single-page.html"> <img src="images/listing/list2/event1.jpg" alt="Event 1" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event2.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event3.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event4.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event5.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event6.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event7.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event8.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
          </div>

          <div class="eventtab-content" id="night-life">
              <!-- Cards content for "Night Life" -->
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event5.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event6.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event7.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event8.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                 <a href="event-single-page.html"> <img src="images/listing/list2/event1.jpg" alt="Event 1" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event2.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                   <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event3.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event4.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
          </div>

          <div class="eventtab-content" id="leisure">
              <!-- Cards content for "Leisure" -->
              <div class="eventcard">
                 <a href="event-single-page.html"> <img src="images/listing/list2/event1.jpg" alt="Event 1" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
               <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event2.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event3.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                  <div class="tconaln">
                      <h3 class="title">
                        <a href="">Folklore Festival</a>
                      </h3>
                      <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    </div>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div>
              <!--<div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event4.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <h3 class="title">
                      <a href="">Folklore Festival</a>
                    </h3>
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
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event5.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <h3 class="title">
                      <a href="">Folklore Festival</a>
                    </h3>
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
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event6.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <h3 class="title">
                      <a href="">Folklore Festival</a>
                    </h3>
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
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event7.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <h3 class="title">
                      <a href="">Folklore Festival</a>
                    </h3>
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
              <div class="eventcard">
                <a href="event-single-page.html"><img src="images/listing/list2/event8.jpg" alt="Event 2" class="img-zoom"></a>
                  <div class="listing-info">
                    <h3 class="title">
                      <a href="">Folklore Festival</a>
                    </h3>
                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Sun, 12 Feb 2023</span> </h6>
                    <ul class="place-info ">
                      <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Arad Heritage Village</a></li>
                      <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="place-info mob-view-arrow">
                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
              </div> -->
          </div>
          <div class="mb-5 mt-5 text-center">
            <button id="loadMore" class="inloadmoreev">View More</button>
          </div>


<!--<script>
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
</script>--> 


                </div>
            </div>
            <!-- Our Services -->


            <!-- Event Section -->



        <div class="container text-center bannerevents-2">
            <a href="#"><img src="images/featured/new-banner.jpg" alt=""></a> 
        </div>
       <?php  $event_subcategory = DB::table('event_subcategories')
        ->where('eventshow','=','1')->orderBy('id', 'asc')->get();  
$k=0;
?>
@foreach($event_subcategory as $subcat)
        <!-- Dining Section -->
        <section class="">
            <div class="section-full bg-white content-inner about-us <?php if($k!=0) { ?> catevents <?php } ?>">
                <div class="container">
                    <div class="section-head text-black text-center pt-3">
                        <h2 class="eventhead-h1 dininghead"><div class="line-seperator"></div> {{$subcat->subcategory_name}} EVENTS <div class="line-seperator"></div></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                    <div class="owl-location-carousel owl-carousel owl-btn-2 owl-btn-center-lr-arrow eventdiningsec">
                    <?php $catevents=App\Models\Event::events_by_category($subcat->id);?>
                    @foreach($catevents as $cevent)   
                    <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="{{url('events/'.$cevent->subcategory_name.'/'.$cevent->url)}}"><img src="{{asset($cevent->fimage1)}}" class="diningimg-event img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">{{$cevent->subcategory_name}}</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1 dining-content-event">
                                    <h3 class="title title-length"><a href="{{url('events/'.$cevent->subcategory_name.'/'.$cevent->url)}}" class="diningevent-head">{{substr($cevent->title,0,15)}}...</a></h3>
                                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> {{ \DateTime::createFromFormat('d/m/Y', $cevent->start_date)->format('D, d M Y') }}</span> </h6>
                                    <ul class="place-info ">
                                        <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">{{substr($cevent->location,0,35)}}...</a></li>
                                        <li class="open arrow_btn lap-view-arrow"><a href="{{url('events/'.$cevent->subcategory_name.'/'.$cevent->url)}}" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                    <ul class="place-info mob-view-arrow">
                                        <li class="open arrow_btn "><a href="{{url('events/'.$cevent->subcategory_name.'/'.$cevent->url)}}" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                   
                </div>
            </div>
        </section>
        <?php $k++; ?>
        @endforeach
           



            <!-- Videos Area -->
           <!-- <section class="">
            <div class="section-full bg-gray-1 content-inner about-us nightclubevent-area">
                <div class="container">
                    <div class="section-head text-black text-center pt-3">
                        <h2 class="eventhead-h1"><div class="line-seperator"></div> NIGHT CLUB EVENTS <div class="line-seperator"></div></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                    <div class="owl-location-carousel owl-carousel owl-btn-2 owl-btn-center-lr-arrow eventdiningsec nightclub-section2">
                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="event-single-page.html"><img src="images/featured/dining-img1-event.jpg" class="diningimg-event img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title title-length"><a href="event-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
                                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Tue, 18 Feb 2023</span> </h6>
                                    <ul class="place-info ">
                                        <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Wagalag</a></li>
                                        <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                    <ul class="place-info mob-view-arrow">
                                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="event-single-page.html"><img src="images/featured/dining-img2-event.jpg" class="diningimg-event img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title title-length"><a href="event-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
                                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Tue, 18 Feb 2023</span> </h6>
                                    <ul class="place-info ">
                                        <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Wagalag</a></li>
                                        <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                    <ul class="place-info mob-view-arrow">
                                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="event-single-page.html"><img src="images/featured/dining-img3-event.jpg" class="diningimg-event img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title title-length"><a href="event-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
                                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Tue, 18 Feb 2023</span> </h6>
                                    <ul class="place-info ">
                                        <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Wagalag</a></li>
                                        <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                    <ul class="place-info mob-view-arrow">
                                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="event-single-page.html"><img src="images/featured/dining-img4-event.jpg" class="diningimg-event img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title title-length"><a href="event-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
                                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Tue, 18 Feb 2023</span> </h6>
                                    <ul class="place-info ">
                                        <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Wagalag</a></li>
                                        <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                    <ul class="place-info mob-view-arrow">
                                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="listing-bx featured-star-right m-b30 style-2 box-event-border dining-evntsingle-box">
                                <div class="listing-media">
                                    <a href="event-single-page.html"><img src="images/featured/dining-img5-event.jpg" class="diningimg-event img-zoom" alt=""></a>
                                    <ul class="featured-star category_tab">
                                        <a href="categories.html" class="category_txt">Concert</a>
                                    </ul>
                                </div>
                                <div class="listing-info info1">
                                    <h3 class="title title-length"><a href="event-single-page.html" class="diningevent-head">53rd Asian Congress-Skal International Bahrain Club 370</a></h3>
                                    <h6 class="post-date"> <i class="icon-calendar calendericon"></i> <span class="categorydate"> Tue, 18 Feb 2023</span> </h6>
                                    <ul class="place-info ">
                                        <li class="place-location"><i class="fa fa-map-marker"></i><a href="venue.html" class="all-venue">Wagalag</a></li>
                                        <li class="open arrow_btn lap-view-arrow"><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                    <ul class="place-info mob-view-arrow">
                                        <li class="open arrow_btn "><a href="event-single-page.html" class="arrow_txt"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>-->

            <!-- Videos Area -->

            <div class="container text-center bannerevent3">
                <a href="#"><img src="images/featured/new-banner.jpg" alt=""></a> 
            </div>


    </div>
    <!-- Content END-->


@include('footer')
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
<!-- Form Select Option -->

<script>
document.querySelectorAll('.custom-select').forEach(select => {
    select.addEventListener('click', function (e) {
        // Close all other dropdowns
        document.querySelectorAll('.custom-select').forEach(otherSelect => {
            if (otherSelect !== select) {
                otherSelect.classList.remove('open');
            }
        });
        
        // Toggle the clicked dropdown
        this.classList.toggle('open');
    });

    document.querySelectorAll('.custom-option').forEach(option => {
        option.addEventListener('click', function () {
            let selectTrigger = this.closest('.custom-select').querySelector('.custom-select-trigger');
            selectTrigger.textContent = this.textContent;
            this.closest('.custom-select').classList.remove('open');
        });
    });
});

document.addEventListener('click', function (e) {
    // Close dropdown if clicked outside
    if (!e.target.closest('.custom-select')) {
        document.querySelectorAll('.custom-select').forEach(select => {
            select.classList.remove('open');
        });
    }
});


</script>

<!-- Form Select Option -->

<script>
  // Horizonal Tab Custom Added by Anandhu

const tabItems = document.querySelectorAll('.eventtab-item');
const tabContents = document.querySelectorAll('.eventtab-content');
const loadMoreButton = document.getElementById('loadMore');

tabItems.forEach(item => {
    item.addEventListener('click', () => {
        // Remove active class from all tabs
        tabItems.forEach(tab => tab.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));

        // Add active class to clicked tab and corresponding content
        item.classList.add('active');
        const tabId = item.getAttribute('data-tab');
        const activeTabContent = document.getElementById(tabId);
        activeTabContent.classList.add('active');

        // Reset load more functionality for the newly active tab
        resetLoadMore(activeTabContent);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Initialize with the default active tab
    resetLoadMore(document.querySelector('.eventtab-content.active'));

    // Event listener for the load more button
    loadMoreButton.addEventListener('click', function () {
        const activeTabContent = document.querySelector('.eventtab-content.active');
        toggleLoadMore(activeTabContent);
    });
});

// Function to reset and hide extra event cards
function resetLoadMore(activeTabContent) {
    const eventCards = activeTabContent.querySelectorAll('.eventcard');
    let currentVisible = 4; // Initial number of cards to show
    const totalCards = eventCards.length;

    // Show only the first 4 cards initially
    eventCards.forEach((card, index) => {
        card.style.display = index < currentVisible ? 'inline-block' : 'none';
    });

    // Show or hide the load more button based on card count
    loadMoreButton.style.display = totalCards > currentVisible ? 'inline-block' : 'none';
    loadMoreButton.textContent = 'View More';
}

// Function to handle view more/less actions
function toggleLoadMore(activeTabContent) {
    const eventCards = activeTabContent.querySelectorAll('.eventcard');
    let currentVisible = Array.from(eventCards).filter(card => card.style.display !== 'none').length;

    if (loadMoreButton.textContent === 'View More') {
        // Show more cards
        currentVisible += 4;
        eventCards.forEach((card, index) => {
            if (index < currentVisible) card.style.display = 'inline-block';
        });

        if (currentVisible >= eventCards.length) {
            loadMoreButton.textContent = 'View Less';
        }
    } else {
        resetLoadMore(activeTabContent); // Reset to the initial state
    }
}

</script>


<script>
 // Select all heart icons
const heartIcons = document.querySelectorAll('.heart-icon');

// Loop through each icon and add a click event listener
heartIcons.forEach(icon => {
    icon.addEventListener('click', function () {
        this.classList.toggle('active'); // Toggles the 'active' class
    });
});
</script>


  <style>
.event_calendar_section {
  width: 75%;
  margin: 30px auto;
}
.events-div-center {
  width: 100%;
  float: left;
  border: 1px solid #222224;
  margin-bottom: 28px;
}
.calender_on_div h1 {
  color: #000;
  font-size: 24px;
  padding-bottom: 22px;
  padding-top: 5px;
  font-weight: 500;
  letter-spacing: 1px;
  font-family: "Poppins", sans-serif;
}
.calender_on_div h1, .event_calendar_section h3, .event_calendar_section h4 {
  
  text-align: center;
}
#attendence_grid {
  padding-left: 17px;
}
.week-top-name {
  padding: 3px 1%;
  background: #fff;
  border: 0;
  color:#ed1c24;
}
.week-cla-light-gray, .week-top-name {
  font-size: 15px;
  width: 14%;
  font-weight: 600;
  float: left;
  font-family: "Poppins", sans-serif;
}
.week-cla-light-gray {
  padding: 12px 1%;
  min-height: 46px;
  background: #fff;
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
  background: #fff;
    padding-bottom: 41px;
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
  font-weight: 400;
  font-size: 14px;
  font-family: "Poppins", sans-serif;
}
code, kbd, pre, samp {
  
  font-size: 1em;
}
code, kbd, pre, samp {
  
  padding: 2px 5px;
  font-size: 16px;
  font-family: "Poppins", sans-serif;
    font-weight: 600;
}
.event_calendar_section h3 {
  color: #ed1c24;
  font-weight: 600;
  margin-bottom: 0;
  font-size: 21px;
  font-family: "Poppins", sans-serif;
}
.calender_on_div h1, .event_calendar_section h3, .event_calendar_section h4 {
  
  text-align: center;
}
.event_calendar_section h4 {
  color: #fff;
  font-weight: 500;
  font-size: 17px;
  margin-top: 3px;
  font-family: "Poppins", sans-serif;
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
.catevents
{
margin-top:107px;
}
</style>
<script type="text/javascript">

function geteventCalendar(month, year) {
    $("#body-overlay").show();
    $.ajax({
        url: '/fetch_event_calendar', 
        type: "POST",
        data: {
            month: month,
            year: year,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            setInterval(function() { $("#body-overlay").hide(); }, 500);
            $(".calender_on_div").html(response);
        },
        error: function() {
            console.error("An error occurred.");
        } 
    });
}
function fetch_event_calendar_data(date) {
   
    $.ajax({
        url: '/fetch-events',  // The route to your Laravel controller
        type: 'GET',
        data: { date: date },   // Send the selected date
        success: function (response) {
            // Clear the container
            $('#calendarcontainer #container').html('');
            
            // Append the fetched events to the container
            response.events.forEach(function(event) {
                let eventHTML = `
                    <div class="event-tab-list1">
                        <a href="event-single-page.html" target="_blank">
                            <h5>${event.title} @ ${event.start_time}</h5>
                        </a>
                    </div>
                `;
                $('#calendarcontainer #container').append(eventHTML);
            });
        },
        error: function (xhr, status, error) {
            console.error('Error fetching events:', error);
        }
    });
}


$(document).on("click", '.prev', function(event) { 
    
	var month =  $(this).data("prev-month");
	var year =  $(this).data("prev-year");
	geteventCalendar(month,year);
});
$(document).on("click", '.next', function(event) { 
    alert("nnnn");
	var month =  $(this).data("next-month");
	var year =  $(this).data("next-year");
	geteventCalendar(month,year);
});
</script>
</body>
</html>
