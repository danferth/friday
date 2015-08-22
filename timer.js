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
var set_now     = new Date(now_year, now_month, now_date, now_hour, now_minute, now_second);
var set_target  = new Date(target_year, target_month, target_date, target_hour, target_minute, target_second);

var time_diff = set_target - set_now;

var diff_days     = 0,
    diff_hours    = 0,
    diff_minutes  = 0,
    diff_seconds  = 0;

//find seconds
if(time_diff % 1000 === 0){
  diff_seconds = time_diff / 1000;
}else{
  var remainder = time_diff % 1000;
  diff_seconds = (time_diff - remainder)/1000;
}

//pars function
var find_time = function(time, count){
  if(diff_seconds % count === 0){
    time = diff_seconds / count;
  }else{
    var  n = diff_seconds % count;
    time = (diff_seconds - n) / count;
  }
  diff_seconds = n;
  return time;
};

var days = find_time(diff_days, 86400);
var hours = find_time(diff_hours, 3600);
var minutes = find_time(diff_minutes, 60);
var seconds = diff_seconds;

console.log("days "+days+ " | hours "+hours+" | minutes "+minutes+" | seconds "+seconds);

var countdown = function(sec){
  var start_seconds = seconds;
  find_time(days, 86400);
  find_time(hours, 3600);
  find_time(minutes, 60);
  seconds = diff_seconds;

  console.log("days "+days+ " | hours "+hours+" | minutes "+minutes+" | seconds "+seconds);

  start_seconds = seconds -1;
};

setInterval("countdown(seconds)", 1000);


