<?php
date_default_timezone_set('America/Los_Angeles');
$target = strtotime('next Friday 17:30');
//$target = mktime(17, 30, 0, 3, 29, 2013);
$time = time();
$difference = (int)($target-$time);

$days = (int)($difference/86400);
$day = round($days, 0, PHP_ROUND_HALF_DOWN);

$hours = (int)(($difference/3600)-($day*24));
$hour = round($hours, 0, PHP_ROUND_HALF_DOWN);

$minutes = (int)(($difference/60)-(($hour*60)+($day*1440)));
$minute = round($minutes, 0, PHP_ROUND_HALF_DOWN);

$seconds = (int)(($difference/1)-(($hours*3600)+($days*86400)+($minutes*60)));
$second = round($seconds, 0, PHP_ROUND_HALF_DOWN);

$test = date("g:i:s",$time);
?>

<span class="digit day"><?php echo $day; ?><span>Day</span></span>
<span class="digit hour"><?php echo $hours; ?><span>Hours</span></span>
<span class="digit minute"><?php echo $minutes; ?><span>Minutes</span></span>
<span class="digit second"><?php echo $seconds; ?><span>Seconds</span></span>