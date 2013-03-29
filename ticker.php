<?php
//Set time zone
date_default_timezone_set('America/Los_Angeles');
//set time
$time = time();
//check range between desired target and time
$testSet = strtotime('Friday 17:30');
$testDiff = (int)($testSet-$time);

//target day needs to be 'today' from midnight (63000) and zero hour and next friday there after
$targetDay = '';
$min = '0';
$max = '63000';
if(($testDiff >= $min) && ($testDiff <= $max)){
	$targetDay = 'today';
}if(($testDiff < $min) || ($testDiff > $max)){
	$targetDay = 'next Friday';
}

$targetTime = '17:30'; 
$target = strtotime("$targetDay $targetTime");
//set difference from target and time
$targetDiff = (int)($target-$time);

//display target
$days = (int)($targetDiff/86400);
$dayNum = round($days, 0, PHP_ROUND_HALF_DOWN);
$day = str_pad($dayNum, 2, '0', STR_PAD_LEFT); 

$hours = (int)(($targetDiff/3600)-($day*24));
$hourNum = round($hours, 0, PHP_ROUND_HALF_DOWN);
$hour = str_pad($hourNum, 2, '0', STR_PAD_LEFT); 

$minutes = (int)(($targetDiff/60)-(($hour*60)+($day*1440)));
$minuteNum = round($minutes, 0, PHP_ROUND_HALF_DOWN);
$minute = str_pad($minuteNum, 2, '0', STR_PAD_LEFT); 

$seconds = (int)(($targetDiff/1)-(($hours*3600)+($days*86400)+($minutes*60)));
$secondNum = round($seconds, 0, PHP_ROUND_HALF_DOWN);
$second = str_pad($secondNum, 2, '0', STR_PAD_LEFT); 


?>
<!-- output time veriables -->
<span class="digit day"><?php echo $day; ?><span>Days</span></span>
<span class="digit hour"><?php echo $hour; ?><span>Hours</span></span>
<span class="digit minute"><?php echo $minute; ?><span>Minutes</span></span>
<span class="digit second"><?php echo $second; ?><span>Seconds</span></span>