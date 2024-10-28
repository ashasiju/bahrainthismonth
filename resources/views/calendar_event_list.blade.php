<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<h3> EVENTS ON </h3>
<h4><?php echo  date('D, d F Y', strtotime($date)); ?> </h4>
<input type="hidden" id="showmyscollbr" value="<?php echo count($result); ?>" />
<?php
if(isset($result) && !empty($result) && count($result)>5)
{ ?>
	<div class="icon-div1"></div>
<?php } ?>
<div id="container">
	<?php
	if(isset($result) && !empty($result))
	{
		//pr($result); //die;
		foreach($result as $row)
		{
			$myurl="";
			if(isset($row->show_url_alias) && !empty($row->show_url_alias))
			{ 
				$myurl='events/'.encode_string($row->subcat).'/'.$row->show_url_alias;
			}
			else
			{
				$myurl=encode_title($row->event_name);
			}?>
			<?php $eventsdate =  $row->event_date;
                  $eventedate =   $row->event_end_date;
                  $eventstimee =   $row->event_start_time;
                  $eventetime =   $row->event_end_time;
              ?>

			<?php 
               $endDateTime = date('Y-m-d H:i:s', strtotime("$eventedate $eventetime"));
               $startDateTime = date('Y-m-d H:i:s', strtotime("$eventsdate $eventstimee")) ;
               $diffrence = strtotime($endDateTime) - strtotime($startDateTime);
               $minutes = floor(($diffrence - ($days * 86400) - ($hours * 3600))/60);
          ?> 
			<?php if($row->parent_id == 0){ ?>
			<?php if($minutes > 1){ ?>
			<div class="event-tab-list1">
				<a href="<?php echo base_url().$myurl; ?>" target="_blank"><h5> <?php echo $row->event_name; ?> @ <?php echo date("G:i a", strtotime($row->event_start_time)); ?></h5></a>
			</div>
			<?php } ?>
			<?php }else{ ?>
			<div class="event-tab-list1">
				<a href="<?php echo base_url().$myurl; ?>" target="_blank"><h5> <?php echo $row->event_name; ?> @ <?php echo date("G:i a", strtotime($row->event_start_time)); ?></h5></a>
			</div>
			<?php } ?>
	<?php }  }
	else
	{ ?>
		<div class="event-tab-list1">
			<h5> No Event Found</h5>
		</div>
	<?php }	?>
</div>
<?php
if(isset($result) && !empty($result) && count($result)>5)
{ ?>
	<div class="icon-div2"></div>
<?php } ?>
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
</script>