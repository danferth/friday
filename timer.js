var today = new Date();
console.log(today);

var day = today.getDay();
console.log(day);

var day_str = function(arr){
  var d = "";
  switch(arr){
      case 0 :
        d =  "Sunday";
          break;
      case 1 :
        d = "Monday";
        break;
      case 2 :
        d = "Teusday";
        break;
      case 3 :
        d = "Wednesday";
        break;
      case 4 :
        d = "Thursday";
        break;
      case 5 :
        d = "Friday";
        break;
      case 6 :
        d = "Saturday";
        break;
      default:
        d = "Funday";
        break;
  }
  return d;

};

console.log(day_str(day));