

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    // add a zero in front of numbers<10
    m = checkTime(m);
     var dd = "AM";
    if (h >= 12) {
        h = h-12;
        dd = "PM";
    }
     if (h == 0) {
        h = 12;
    }

    document.getElementById('time').innerHTML = h + ":" + m + " " + dd ;
    t = setTimeout(function () {
        startTime()
    }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
startTime();

var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
if(month == 1){
    month = "Jan";
} else if(month == 2){
    month = "Feb"
} else if(month == 3){
    month = "March"
} else if(month == 4){
    month = "April"
} else if(month == 5){
    month = "May"
} else if(month == 6){
    month = "June"
} else if(month == 7){
    month = "July"
} else if(month == 8){
    month = "Aug"
} else if(month == 9){
    month = "Sept"
} else if(month == 10){
    month = "Oct"
} else if(month == 11){
    month = "Nov"
} else if(month == 12){
    month = "Dec"
} 
document.getElementById('date').innerHTML =month + ". " + day + ", " + year;