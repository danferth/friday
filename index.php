<?php
include $_SERVER['DOCUMENT_ROOT'].'/_config.php';
$body->set_page('index');
$body->head();

?>

<div class="taco">
<h1 style="color:#fff;"><?php echo date(e); ?></h1>

?>
	<div class="timer">
		<div class="countdown"></div>
		<p class="tag">Friday <strong>5:30</strong> will come, please be patient&nbsp; &nbsp;<span>:o)</span></p>
	</div>
</div>

<?php $body->foot(); ?>