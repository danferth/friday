var now = new Date();
var now_day = now.getDay(),
    now_month = now.getMonth(),
    now_date = now.getDate(),
    now_year = now.getFullYear(),
    now_hour = now.getHours(),
    now_minute = now.getMinutes(),
    now_second = now.getSeconds();
    
var target_day = 0,
    target_month = now_month,
    target_year = now_year,
    target_hour = 17,
    target_minute = 30,
    target_second = 0;
    
switch(now_day){
    case 0:
        target_day = now_date + 5;
        break;
    case 1:
        target_day = now_date + 4;
        break;
    case 2:
        target_day = now_date + 3;
        break;
    case 3:
        target_day = now_date + 2;
        break;
    case 4:
        target_day = now_date + 1;
        break;
    case 5:
        target_day = now_date + 0;
        break;
    case 6:
        target_day = now_date + 6;
        break;
}
var set_now = new Date(now_year, now_month, now_date, now_hour, now_minute, now_second);
var set_target = new Date(target_year, target_month, target_day, target_hour, target_minute, target_second);

var time_diff = set_target - set_now;

var days = time_diff/86400000;


console.log(days);
console.log("now = " + set_now);
console.log("target = " + set_target);
console.log(time_diff);