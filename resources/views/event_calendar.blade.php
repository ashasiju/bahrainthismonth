<?php
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
			$weekLength = getWeekLengthByMonth($currentMonthDaysLength, $currentMonthStart, $currentYear, $currentMonth);
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
.activedate{background-color:#e40046;}
</style>
<?php

	function getWeekLengthByMonth($currentMonthDaysLength=NULL, $currentMonthStart=NULL, $currentYear=NULL, $currentMonth=NULL)
	{
		//$CI = &get_instance();
		$weekLength =  intval ( $currentMonthDaysLength / 7 );
		if($currentMonthDaysLength % 7 > 0) 
		{
			$weekLength++;
		}
		$monthStartDay= date ( 'N', strtotime ( $currentMonthStart) );		
		$monthEndingDay= date ( 'N', strtotime ( $currentYear . '-' . $currentMonth . '-' . $currentMonthDaysLength) );
		if ($monthEndingDay < $monthStartDay) {			
			$weekLength++;
		}
		
		return $weekLength;
	}

?>
