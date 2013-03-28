<?php

// $url=$_SERVER['REQUEST_URI'];
// header("Refresh: 1; URL=$url"); 

date_default_timezone_set('America/Los_Angeles');
$target = mktime(17, 30, 0, 3, 29, 2013);
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

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>.::|FRIDAY|::.</title>
	<link href='http://fonts.googleapis.com/css?family=Chivo:400,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="taco">
		<div class="timer">
			<div class="countdown">
				<span class="digit day"><?php echo $day; ?><span>Days</span></span>
				<span class="digit hour"><?php echo $hours; ?><span>Hours</span></span>
				<span class="digit minute"><?php echo $minutes; ?><span>Minutes</span></span>
				<span class="digit second"><?php echo $seconds; ?><span>Seconds</span></span>
	
			</div>
			<p class="tag">Firday will come please be patient&nbsp; &nbsp;<span>:o)</span></p>
		</div>
		
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="assets/js/site.js"></script>
	<script src="https://danferth-host.googlecode.com/files/prefix.js"></script>
</body>
</html>