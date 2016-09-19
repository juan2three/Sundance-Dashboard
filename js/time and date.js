(function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

   function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            dd = "AM";
        document.getElementById('time').innerHTML = h + ":" + m + " " + dd;
        t = setTimeout(function () {
            startTime()
        }, 500);

    }
    startTime();
})();

var monthNames = [
  "January", "February", "March",
  "April", "May", "June", "July",
  "August", "September", "October",
  "November", "December"
];

var date = new Date();
var day = date.getDate();
var monthIndex = date.getMonth();
var year = date.getFullYear();

console.log(day, monthNames[monthIndex], year);
document.write(day + ' ' + monthNames[monthIndex] + ' ' + year);