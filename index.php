<?php
include $_SERVER['DOCUMENT_ROOT'].'/_config.php';
$body->set_page('index');
$body->head();

?>

<div class="taco">
	<div class="timer">
		<div class="countdown">
			<span class="digit day"><span>Days</span></span>
            <span class="digit hour"><span>Hours</span></span>
            <span class="digit minute"><span>Minutes</span></span>
            <span class="digit second"><span>Seconds</span></span>
		</div>
		<p class="tag">Friday <strong>5:30</strong> will come, please be patient&nbsp; &nbsp;<span>:o)</span></p>
	</div>
</div>

<?php $body->foot(); ?>