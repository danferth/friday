<?php
include $_SERVER['DOCUMENT_ROOT'].'/classes/_countdown.php';

$countdown = new countdown_timer('America/Los_Angeles','17:30','Friday');
$day = $countdown->get_day();
$hour = $countdown->get_hour();
$minute = $countdown->get_minute();
$second = $countdown->get_second();
?>

<!-- output time veriables -->
<span class="digit day"><?php echo $day; ?><span>Days</span></span>
<span class="digit hour"><?php echo $hour; ?><span>Hours</span></span>
<span class="digit minute"><?php echo $minute; ?><span>Minutes</span></span>
<span class="digit second"><?php echo $second; ?><span>Seconds</span></span>
