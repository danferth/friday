//go nuts!
//to have something parse before anything else add the code to ../lib/AAA.js it is the first file in the concatenation process
//initialize foundation
$(document).foundation();


//doc ready
$(document).ready(function(){

var countdown = function(){
  
var now           = new Date(),
    now_day       = now.getDay(),
    now_month     = now.getMonth(),
    now_date      = now.getDate(),
    now_year      = now.getFullYear(),
    now_hour      = now.getHours(),
    now_minute    = now.getMinutes(),
    now_second    = now.getSeconds(),
    target_date   = 0,
    target_month  = now_month,
    target_year   = now_year,
    target_hour   = 17,
    target_minute = 30,
    target_second = 0;

switch(now_day){
  case 0:   target_date = now_date + 5;
    break;
  case 1:   target_date = now_date + 4;
    break;
  case 2:   target_date = now_date + 3;
    break;
  case 3:   target_date = now_date + 2;
    break;
  case 4:   target_date = now_date + 1;
    break;
  case 5:   target_date = now_date + 0;
    break;
  case 6:   target_date = now_date + 6;
    break;
}

var start_now     = new Date(now_year, now_month, now_date, now_hour, now_minute, now_second);
var start_target  = new Date(target_year, target_month, target_date, target_hour, target_minute, target_second);

var start = start_target - start_now;

var diff_days     = 0,
    diff_hours    = 0,
    diff_minutes  = 0,
    diff_seconds  = 0;

var toSeconds  = function(mills){
  var rslt = 0;
  if(mills % 1000 === 0){
    rslt = mills / 1000;
  }else{
    var n = mills % 1000;
    rslt = (mills - n) / 1000;
  }
  return rslt;
};

var find_time = function(sec, count){
  
  if(sec % count === 0){
    var n = sec / count;
  }else{
    var  r = sec % count;
    n = (sec - r) / count;
  }
  return n;
};



  
  var diff = toSeconds(start);
  diff_days     = find_time(diff, 86400);
  diff_hours    = find_time(diff,3600) - (diff_days * 24);
  diff_minutes  = find_time(diff, 60) - ((diff_hours * 60) + (diff_days * 1440));
  diff_seconds  = find_time(diff, 1) - ((diff_minutes * 60) + (diff_hours * 3600) + (diff_days * 86400));
  
  var addZero = function(n){
    var s = n.toString();
    if(s.length == 1){
      return "0" + s;
    }else{
      return n;
    }
  };
  
  var days = addZero(diff_days),
      hours = addZero(diff_hours),
      minutes = addZero(diff_minutes),
      seconds = addZero(diff_seconds);
  
  
  $('.countdown .day').html(days + "<span>Days</span>");
  $('.countdown .hour').html(hours + "<span>Hours</span>");
  $('.countdown .minute').html(minutes + "<span>Minutes</span>");
  $('.countdown .second').html(seconds + "<span>Seconds</span>");

};

setInterval(function(){
 countdown();
}, 1000);



}); //END Doc.ready


//doc load
$(window).on('load', function(){

  
  //if loader play()
  var loaded = function(){
    if($('.loader').is(':visible')){
      console.log('loader detected <br/>');
      //loader animation  
      var loaderExit = new TimelineMax({onComplete: function(){console.log('loader removerd <br/>')}});
          loaderExit.add(TweenMax.to('.loader', .5, {autoAlpha:0}));
	  }
  };
	
  loaded();
}); //END WIN.load

