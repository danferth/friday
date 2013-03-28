<?php
date_default_timezone_set('America/Los_Angeles');
$target = strtotime('next Friday 17:30');
//$target = mktime(17, 30, 0, 3, 29, 2013);
$time = time();
$difference = (int)($target-$time);

$days = (int)($difference/86400);
$dayNum = round($days, 0, PHP_ROUND_HALF_DOWN);
$day = str_pad($dayNum, 2, '0', STR_PAD_LEFT); 

$hours = (int)(($difference/3600)-($day*24));
$hourNum = round($hours, 0, PHP_ROUND_HALF_DOWN);
$hour = str_pad($hourNum, 2, '0', STR_PAD_LEFT); 

$minutes = (int)(($difference/60)-(($hour*60)+($day*1440)));
$minuteNum = round($minutes, 0, PHP_ROUND_HALF_DOWN);
$minute = str_pad($minuteNum, 2, '0', STR_PAD_LEFT); 

$seconds = (int)(($difference/1)-(($hours*3600)+($days*86400)+($minutes*60)));
$secondNum = round($seconds, 0, PHP_ROUND_HALF_DOWN);
$second = str_pad($secondNum, 2, '0', STR_PAD_LEFT); 

$test = date("g:i:s",$time);
?>

<span class="digit day"><?php echo $day; ?><span>Day</span></span>
<span class="digit hour"><?php echo $hour; ?><span>Hours</span></span>
<span class="digit minute"><?php echo $minute; ?><span>Minutes</span></span>
<span class="digit second"><?php echo $second; ?><span>Seconds</span></span>