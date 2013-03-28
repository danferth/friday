$(document).ready(function(){

var auto_refresh = setInterval(
function (){
	$('.countdown').load('ticker.php?_=' +Math.random());
}, 1000); // refresh every 10000 milliseconds


});