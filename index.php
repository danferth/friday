<?php
  require('config.php');
  //set title and description for page
  $title        = 'home';
  $description  = 'description for page';
  $pageLoader   = false;
  siteHeader();
?>

<!-- START -->
<div class="taco">
  <div class="timer">
    <div class="countdown">
      <span class="digit day"><span>Days</span></span>
      <span class="digit hour"><span>Hours</span></span>
      <span class="digit minute"><span>Minutes</span></span>
      <span class="digit second"><span>Seconds</span></span>
    </div>
      <p class="tag">5:30 Friday will come, please be patient <i class="fa fa-smile-o"></i></p>
  </div>
</div>
<!-- END -->

<?php siteFooter(); ?>