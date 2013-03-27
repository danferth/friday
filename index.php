<?php

$target = mktime(17, 30, 0, 3, 29, 2013);
$now = time();
$difference = ($target-$now);
$days = (int) ($difference/86400);
$hours = (int) (($difference/3600)-($days*24));
$minutes = (int) (($difference/60)-($hours*60+$days*1440));


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
		<div class="countdown">
		<?php echo $difference; ?>
			<?php #echo $days . ":" . $hours . ":" . $minutes; ?>
		<p class="tag">Firday will come please be patient<span>:)</span></p>
		</div>
		
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://danferth-host.googlecode.com/files/prefix.js"></script>
</body>
</html>